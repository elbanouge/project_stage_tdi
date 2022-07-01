<template>
  <div class="filtering clearfix">
    <div class="filtering-label">{{ trans("admin.filtering") }}</div>
    <!-- used -->
    <div v-if="categories" class="filter category-filter">
      <multiselect
        v-model="filter_model.category"
        selected-label
        select-label
        deselect-label
        :options="categories"
        :placeholder="trans('admin.category')"
        label="name"
        track-by="id"
        :multiple="false"
      >
        <span slot="noResult">{{ trans("text.no-item-found") }}</span>
      </multiselect>
    </div>

    <!-- used -->
    <div v-if="languages" class="filter dropdown language-filter">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownFilterLanguage"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span
          v-if="
            filter_model.language_index || filter_model.language_index === 0
          "
          >{{ languages[filter_model.language_index].name }}</span
        >
        <span v-else class="text-muted">{{ trans("admin.language") }}</span>
      </button>
      <div
        class="dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownFilterLanguage"
      >
        <a
          class="dropdown-item"
          href="#"
          @click.prevent="filter_model.language_index = index"
          v-for="(language, index) in languages"
          :key="index"
          exact
          >{{ language.name }}</a
        >
      </div>
    </div>

    <!-- used -->
    <div v-if="vieweds" class="filter dropdown viewed-filter">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownFilterViewed"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span v-if="filter_model.viewed">{{
          trans("text.viewed-" + filter_model.viewed)
        }}</span>
        <span v-else class="text-muted">{{ trans("admin.viewed") }}</span>
      </button>
      <div
        class="dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownFilterViewed"
      >
        <a
          class="dropdown-item"
          href="#"
          @click.prevent="filter_model.viewed = viewed"
          v-for="(viewed, key, index) in vieweds"
          :key="index"
          exact
          >{{ trans("text.viewed-" + viewed) }}</a
        >
      </div>
    </div>

    <!-- used -->
    <div v-if="item" class="filter dropdown item-filter">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownFilterItem"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span v-if="filter_model.item">{{ filter_model.item }}</span>
        <span v-else class="text-muted">{{ trans("admin.item") }}</span>
      </button>
      <div
        class="dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownFilterItem"
      >
        <div class="form-group">
          <label for="Username">{{ trans("admin.item") }}</label>
          <input
            type="text"
            step="1"
            v-model="filter_model.item"
            class="form-control"
            id="Username"
          />
        </div>
      </div>
    </div>

    <!-- used -->
    <div v-if="text" class="filter dropdown text-filter">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownFiltertext"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span v-if="filter_model.text">{{ filter_model.text }}</span>
        <span v-else class="text-muted">{{ trans("admin.text") }}</span>
      </button>
      <div
        class="dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownFiltertext"
      >
        <div class="form-group">
          <label for="Username">{{ trans("admin.text") }}</label>
          <input
            type="text"
            step="1"
            v-model="filter_model.text"
            class="form-control"
            id="Username"
          />
        </div>
      </div>
    </div>

    <!-- used -->
    <div v-if="groups" class="filter dropdown group-filter">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownFiltergroup"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span v-if="filter_model.group">{{ filter_model.group }}</span>
        <span v-else class="text-muted">{{ trans("admin.group") }}</span>
      </button>
      <div
        class="dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownFiltergroup"
      >
        <a
          class="dropdown-item"
          href="#"
          @click.prevent="filter_model.group = group"
          v-for="(group, key, index) in groups"
          :key="index"
          exact
          >{{ group }}</a
        >
      </div>
    </div>

    <!-- used -->
    <div v-if="status" class="filter dropdown statu-filter">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownFilterStatu"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span v-if="filter_model.statu">{{
          trans("text.status-" + filter_model.statu)
        }}</span>
        <span v-else class="text-muted">{{ trans("admin.status") }}</span>
      </button>
      <div
        class="dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownFilterStatu"
      >
        <a
          class="dropdown-item"
          href="#"
          @click.prevent="filter_model.statu = statu"
          v-for="(statu, key, index) in status"
          :key="index"
          exact
          >{{ trans("text.status-" + statu) }}</a
        >
      </div>
    </div>

    <!-- used -->
    <div v-if="promoted" class="filter dropdown promoted-filter">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownFilterStatu"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span v-if="filter_model.promoted">{{
          trans("text.promoted-" + filter_model.promoted)
        }}</span>
        <span v-else class="text-muted">{{ trans("admin.promoted") }}</span>
      </button>
      <div
        class="dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownFilterStatu"
      >
        <a
          class="dropdown-item"
          href="#"
          @click.prevent="filter_model.promoted = promoted_item"
          v-for="(promoted_item, key, index) in promoted"
          :key="index"
          exact
          >{{ trans("text.promoted-" + promoted_item) }}</a
        >
      </div>
    </div>

    <!-- used -->
    <div v-if="sticky" class="filter dropdown sticky-filter">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownFilterStatu"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span v-if="filter_model.sticky">{{
          trans("text.sticky-" + filter_model.sticky)
        }}</span>
        <span v-else class="text-muted">{{ trans("admin.sticky") }}</span>
      </button>
      <div
        class="dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownFilterStatu"
      >
        <a
          class="dropdown-item"
          href="#"
          @click.prevent="filter_model.sticky = sticky_item"
          v-for="(sticky_item, key, index) in sticky"
          :key="index"
          exact
          >{{ trans("text.sticky-" + sticky_item) }}</a
        >
      </div>
    </div>

    <div v-if="types" class="filter dropdown type-filter">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownFiltertType"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span v-if="filter_model.type">{{
          trans("text.app-type-" + filter_model.type)
        }}</span>
        <span v-else class="text-muted">{{ trans("admin.type") }}</span>
      </button>
      <div
        class="dropdown-menu dropdown-menu-right"
        aria-labelledby="dropdownFilterType"
      >
        <a
          class="dropdown-item"
          href="#"
          @click.prevent="filter_model.type = type"
          v-for="(type, key, index) in types"
          :key="index"
          exact
          >{{ trans("text.app-type-" + type) }}</a
        >
      </div>
    </div>

    <button
      type="button"
      class="btn btn-info mr-2"
      @click.prevent="filter(filter_model)"
    >
      {{ trans("admin.filter") }}
    </button>

    <button type="button" class="btn btn-warning mr-2" @click.prevent="reset()">
      {{ trans("admin.reset") }}
    </button>

    <div v-if="orders" class="ordering dropdown mr-auto">
      <button
        class="btn dropdown-toggle wp-120"
        type="button"
        id="dropdownOrder"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        {{ trans("text.order-by") }}
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownOrder">
        <a
          class="dropdown-item"
          v-for="(order, key, index) in orders"
          @click.prevent="orderItems(order)"
          :key="index"
          exact
          >{{ trans("text." + order.text) }}</a
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    status: "",
    promoted: "",
    sticky: "",
    types: "",
    replies: "",
    languages: "",
    groups: "",
    rewayat: "",
    soar: "",
    categories: "",
    reciters: "",
    item: "",
    text: "",
    vieweds: "",
    orders: "",
  },
  data() {
    return {
      filter_model: {
        type: "",
        statu: "",
        promoted: "",
        sticky: "",
        reply: "",
        language_index: "",
        group: "",
        item: "",
        viewed: "",
        promoted: "",
        user: "",
        annonce: "",
        sora: "",
        region: "",
        place: "",
      },
    };
  },
  methods: {
    orderItems(order) {
      this.$emit("order", order);
    },
    filter(filters) {
      this.$emit("filter", filters);
    },
    reset() {
      this.filter_model = {
        type: "",
        statu: "",
        promoted: "",
        sticky: "",
        reply: "",
        language_index: "",
        group: "",
        item: "",
        viewed: "",
        promoted: "",
        user: "",
        annonce: "",
        sora: "",
        region: "",
        place: "",
      };
    },
  },
};
</script>
