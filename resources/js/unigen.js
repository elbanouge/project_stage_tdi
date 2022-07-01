import Vue from 'vue'
import draggable from 'vuedraggable'


var app = new Vue({
  el: '#app',
  components: {
    draggable,
},
  methods: {
    addModule: function () {
      var newData = {};
      newData = JSON.parse(JSON.stringify(this.prototype));
      this.unigen.modules.push(newData);
    },
    deleteModule: function (module_index) {
      this.unigen.modules.splice(module_index, 1);
    },
    changeModuleName: function (module_index) {
      var name = this.unigen.modules[module_index].name;
      this.unigen.modules[module_index].name_p = name + 's';
      this.unigen.modules[module_index].name_m = name.charAt(0).toUpperCase() + name.slice(1);
      this.unigen.modules[module_index].name_pm = name.charAt(0).toUpperCase() + name.slice(1) + 's';
    },
    deleteComponent: function (module_index, component_index) {
      this.unigen.modules[module_index].admin.components.splice(component_index, 1)
    },
    addComponent: function (module_index) {
      var component = {
        'name': 'index',
        'name_m': 'Index',
        'type': 'one',
      }
      this.unigen.modules[module_index].admin.components.push(component)
    },
    deleteInput: function (module_index, input_index) {
      this.unigen.modules[module_index].admin.form.inputs.splice(input_index, 1)
    },
    addInput: function (module_index) {
      var input = {
        'name': 'slug',
        'type': 'text',
        'default': 'empty_string',
      }
      this.unigen.modules[module_index].admin.form.inputs.push(input)
    },
    deleteIndexCol: function (module_index, index_col_index) {
      this.unigen.modules[module_index].admin.index.cols.splice(index_col_index, 1)
    },
    addIndexCol: function (module_index) {
      var index_col = {
        'name': 'category',
        'val': 'category.name',
        'type': 'text',
        'can_be_undefined': true,
        'can_be_undefined_check': 'post.category',
        'with': 'category:id,name',
      }
      this.unigen.modules[module_index].admin.index.cols.push(index_col)
    },
    deleteIndexFilter: function (module_index, index_filter_index) {
      this.unigen.modules[module_index].admin.index.filters.splice(index_filter_index, 1)
    },
    addIndexFilter: function (module_index) {
      var index_filter = {
        'key': 'statu',
        'selector': 'statu',
        'value': 'posts.status',
        'name': 'status',
        'requested': false,
      }
      this.unigen.modules[module_index].admin.index.filters.push(index_filter)
    },
    deleteIndexOrder: function (module_index, index_order_index) {
      this.unigen.modules[module_index].admin.index.orders.splice(index_order_index, 1)
    },
    addIndexOrder: function (module_index) {
      var index_order = {
        'key': 'statu',
        'selector': 'statu',
        'value': 'posts.status',
        'name': 'status',
        'requested': false,
      }
      this.unigen.modules[module_index].admin.index.orders.push(index_order)
    },
    deleteCol: function (module_index, col_index) {
      this.unigen.modules[module_index].cols.splice(col_index, 1)
    },
    addCol: function (module_index) {
      var col = {
        'name': 'name',
        'type': 'string',
        'max_lenght': '',
        'required': false,
        'unique': false,
        'default': "0",
      }
      this.unigen.modules[module_index].cols.push(col)
    },

    deleteRelation: function (module_index, relation_index) {
      this.unigen.modules[module_index].relations.splice(relation_index, 1)
    },
    addRelation: function (module_index) {
      var relation = {
        'model': 'model',
        'name': 'name',
        'type': 'belongsTo',
      }
      this.unigen.modules[module_index].relations.push(relation)
    },

    deleteRepMethode: function (module_index, rep_methode_index) {
      this.unigen.modules[module_index].repositories.methodes.splice(rep_methode_index, 1)
    },
    addRepMethode: function (module_index) {
      var methode = {
        'name': 'create',
        'name_m': 'Create',
        'params': [
          {
            'name': 'data',
            'type': 'array',
            'default': '',
          }
        ],
      }
      this.unigen.modules[module_index].repositories.methodes.push(methode)
    },

    deleteRepMethodeParam: function (module_index, rep_methode_index, rep_methode_param_index) {
      this.unigen.modules[module_index].repositories.methodes[rep_methode_index].params.splice(rep_methode_param_index, 1)
    },
    addRepMethodeParam: function (module_index, rep_methode_index) {
      var param = {
        'name': 'data',
        'type': 'array',
        'default': '',
      }
      this.unigen.modules[module_index].repositories.methodes[rep_methode_index].params.push(param)
    },

  },
  watch: {
    unigen: {
      deep: true,
      handler() {
        var data = this.unigen
        axios.post("/unigen/save", data)
          .then((response) => {
            console.log(response);
          })
          .catch((error) => {
            console.log(error);
          })

      }
    }
  },
  data: {
    unigen: window.unigen,
    list1: [
      { name: "John", id: 1 },
      { name: "Joao", id: 2 },
      { name: "Jean", id: 3 },
      { name: "Gerard", id: 4 }
    ],
    list: [
      { id: 1, name: "Abby", sport: "basket" },
      { id: 2, name: "Brooke", sport: "foot" },
      { id: 3, name: "Courtenay", sport: "volley" },
      { id: 4, name: "David", sport: "rugby" }
    ],
    dragging: false,

    prototype: {
      'type': 'simple',
      'type': 'simple',
      'name': 'post',
      'name_p': 'posts',
      'name_m': 'Post',
      'name_pm': 'Posts',
      'engine': 'InnoDB',
      'title_col': 'title',
      'timestamps': true,
      'Sluggable': true,
      'Sluggable_col': 'title',
      'Sortable': true,
      'SoftDeletes': true,
      'Viewable': true,
      'Searchable': true,
      'Filterable': true,
      'Searchable_cols': 'id,title,excerpt',
      'Sortable_cols': 'id,title,created_at',
      'fillable_cols': 'title,slug,body,excerpt,keywords,status,promoted,comment_status,sticky',

      'cols': [
        {
          'name': 'title',
          'type': 'string',
          'max_lenght': '190',
          'required': true,
          'unique': false,
          //'default' : "'title'",
        },
        {
          'name': 'slug',
          'type': 'string',
          'max_lenght': '190',
          'required': false,
          'unique': true,
          //'default' : "'title'",
        },
        {
          'name': 'body',
          'type': 'longText',
          'max_lenght': false,
          'required': false,
          'unique': false,
          //'default' : 0,
        },
        {
          'name': 'excerpt',
          'type': 'text',
          'max_lenght': false,
          'required': false,
          'unique': false,
          //'default' : 0,
        },
        {
          'name': 'keywords',
          'type': 'text',
          'max_lenght': false,
          'required': false,
          'unique': false,
          //'default' : 0,
        },
        {
          'name': 'comment_count',
          'type': 'integer',
          'max_lenght': false,
          'required': false,
          'unique': false,
          'default': 0,
        },

        {
          'name': 'status',
          'type': 'boolean',
          'max_lenght': false,
          'required': false,
          'unique': false,
          'default': "0",
        },
        {
          'name': 'promoted',
          'type': 'boolean',
          'max_lenght': false,
          'required': false,
          'unique': false,
          'default': "0",
        },
        {
          'name': 'comment_status',
          'type': 'boolean',
          'max_lenght': false,
          'required': false,
          'unique': false,
          'default': "0",
        },
        {
          'name': 'sticky',
          'type': 'integer',
          'max_lenght': false,
          'required': false,
          'unique': false,
          'default': 0,
        },

      ],
      'relations': [

        {
          'model': 'category',
          'name': 'categories',
          'type': 'belongsTo',
        },
        {
          'model': 'user',
          'name': 'author',
          'type': 'belongsTo',
        },

      ],
      'repositories': {
        'construct_models': 'post,category,search',
        'methodes': [
          {
            'name': 'create',
            'name_m': 'Create',
            'params': [
              {
                'name': 'data',
                'type': 'array',
                'default': '',
              }
            ],
          },
          {
            'name': 'update',
            'name_m': 'Update',
            'params': [
              {
                'name': 'postId',
                'type': 'int',
                'default': '',
              },
              {
                'name': 'data',
                'type': 'array',
                'default': '',
              }
            ],
          },
          {
            'name': 'destroy',
            'name_m': 'Destroy',
            'params': [
              {
                'name': 'postId',
                'type': 'int',
                'default': '',
              },
              {
                'name': 'forced',
                'type': 'boolean',
                'default': 'false',
              }
            ],
          },
          {
            'name': 'search',
            'name_m': 'Search',
            'params': [
              {
                'name': 'data',
                'type': 'array',
                'default': '',
              },
              {
                'name': 'index',
                'type': 'string',
                'default': '',
              }
            ],
          },
        ],
      },
      'admin': {
        'controller': {
          'construct': true,
          'construct_models': 'post,category,user',
          'methodes': {
            'construct': true,
            'index': true,
            'show': true,
            'create': true,
            'store': true,
            'edit': true,
            'update': true,
            'destroy': true,
            'changeStatus': true,
            'changeSticky': true,
            'changePromote': true,
            'duplicate': true,
            'actions': true,
          },
        },
        'components': [
          {
            'name': 'index',
            'name_m': 'Index',
            'type': 'one', // whiche diplay type to use
          },
          {
            'name': 'edit',
            'name_m': 'Edit',
            'type': 'one',
          },
          {
            'name': 'create',
            'name_m': 'Create',
            'type': 'one',
          },
          {
            'name': 'form',
            'name_m': 'Form',
            'type': 'one',
          },
        ],
        'index': {
          'cols': [
            {
              'name': 'title',
              'val': 'title',
              'type': 'text',
              'can_be_undefined': false,
              'with': '',
            },
            {
              'name': 'author',
              'val': 'author.name',
              'type': 'text',
              'can_be_undefined': true,
              'can_be_undefined_check': 'post.author',
              'with': 'user:id,name',
            },
            {
              'name': 'category',
              'val': 'category.name',
              'type': 'text',
              'can_be_undefined': true,
              'can_be_undefined_check': 'post.category',
              'with': 'category:id,name',
            },
            {
              'name': 'status',
              'type': 'status',
              'can_be_undefined': false,
              'with': '',
            },
            {
              'name': 'date',
              'val': 'created_at',
              'type': 'text',
              'can_be_undefined': false,
              'with': '',
              //'can_be_undefined_check' : 'post.category',
            },
          ],
          'use_filters': true,
          'filters': [
            {
              'key': 'statu',
              'selector': 'statu',
              'value': 'posts.status',
              'name': 'status',
              'requested': false,
            },
            {
              'key': 'category',
              'selector': 'category.id',
              'value': 'posts.category_id',
              'name': 'category',
              'requested': true, // if filter need data to be requested from backend
            },
            {
              'key': 'created_at',
              'selector': 'date.range',
              'value': 'date_range',
              'name': 'date',
              'requested': true, // if filter need data to be requested from backend
            }
          ],
          'use_orders': true,
          'orders': [
            {
              'sort': 'title',
              'direction': 'desc',
              'text': 'order-by-title-desc',
            },
            {
              'sort': 'title',
              'direction': 'asc',
              'text': 'order-by-title-asc',
            },
            {
              'sort': 'created_at',
              'direction': 'desc',
              'text': 'order-by-newest',
            },
            {
              'sort': 'created_at',
              'direction': 'asc',
              'text': 'order-by-oldest',
            },
          ],
          'orders_default': {
            'use': true,
            'col': 'created_at',
            'direction': 'desc',
          },
        },
        'form': {
          'props': 'categories',
          'inputs': [
            {
              'name': 'title',
              'type': 'text', // whiche diplay type to use input_text, input_slug, input_image, input_textarea, input_multiselect, input_radio,
              'default': 'empty_string', // whiche diplay type to use
            },
            {
              'name': 'slug',
              'type': 'text',
              'default': 'empty_string',
            },
            {
              'name': 'excerpt',
              'type': 'textarea',
              'default': 'empty_string',
            },
            {
              'name': 'body',
              'type': 'textarea',
              'default': 'empty_string',
            },
            {
              'name': 'keywords',
              'type': 'textarea',
              'default': 'empty_string',
            },
            {
              'name': 'status',
              'type': 'radio',
              'value1': 'active',
              'value2': 'deactive',
              'default': '0',
            },
            {
              'name': 'promoted',
              'type': 'radio',
              'value1': 'yes',
              'value2': 'no',
              'default': '0',
            },
            {
              'name': 'sticky',
              'type': 'radio',
              'value1': 'yes',
              'value2': 'no',
              'default': '0',
            },
            {
              'name': 'comment_status',
              'type': 'radio',
              'value1': 'yes',
              'value2': 'no',
              'default': '0',
            },
            {
              'name': 'category',
              'type': 'multiselect',
              'options': 'categories',
              'label': 'name',
              'track': 'id',
              'multiple': 'false',
              'default': '{}',
            },
            {
              'name': 'thumb',
              'type': 'text',
              'default': 'empty_string',
            },
          ],
        }
      },
      'front': {
        'controller': {
          'construct': true,
          'construct_models': 'post',
          'methodes': ['construct', 'index', 'show'],
        },
      },
    }
  }

})