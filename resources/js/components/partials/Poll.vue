<template>
  <div v-if="poll || result" class="home-aside sidebare-poll">
    <div class="ha-title">
      <h2>{{ title }}</h2>
    </div>
    <div class="uni-poll">
      <div v-if="view == 'result' || result.user_voted" class="result">
        <div class="poll-title">
          {{ result.title }}
        </div>
        <div class="poll-results">
          <div
            v-for="(option, index) in result.options"
            class="poll-result"
            :key="index"
          >
            <div class="result-title">
              {{ option.title }}({{ option.option_percentage }}%)
            </div>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped"
                :class="randomColor(index)"
                role="progressbar"
                :style="'width: ' + option.option_percentage + '%'"
                :aria-valuenow="option.option_percentage"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
          </div>
        </div>
        <div class="poll-footer">
          {{ trans("text.voters_count", { votes: result.pollq_totalvoters }) }}
        </div>
        <div v-if="!result.user_voted" class="poll-buttons">
          <div class="row">
            <div class="w-50 mx-auto">
              <button
                type="button"
                class="btn btn-info btn-block btn-sm"
                @click="getBack()"
              >
                {{ trans("text.back") }}
              </button>
            </div>
          </div>
        </div>
      </div>
      <div v-else-if="view == 'error'" class="poll">
        <div class="poll-title">
          {{ error }}
        </div>
        <div v-if="!result.user_voted" class="poll-buttons">
          <div class="row">
            <div class="w-50 mx-auto">
              <button
                type="button"
                class="btn btn-info btn-block btn-sm"
                @click="getBack()"
              >
                {{ trans("text.back") }}
              </button>
            </div>
          </div>
        </div>
      </div>
      <div v-else-if="view == 'poll'" class="poll">
        <div class="poll-title">
          {{ poll.title }}
        </div>
        <div class="poll-answers">
          <div
            v-for="(option, key) in poll.options"
            class="custom-control custom-radio"
            :key="key"
          >
            <input
              type="radio"
              v-model="vote"
              :value="option.id"
              :id="'customRadio_' + option.id"
              name="customRadio"
              class="custom-control-input"
            />
            <label
              class="custom-control-label"
              :for="'customRadio_' + option.id"
              >{{ option.title }}</label
            >
          </div>
        </div>
        <div class="poll-buttons">
          <div class="row">
            <div class="col pl-1">
              <button
                type="button"
                class="btn btn-success btn-block btn-sm"
                @click="postVote()"
              >
                {{ trans("text.vote") }}
              </button>
            </div>
            <div class="col pr-1">
              <button
                type="button"
                class="btn btn-info btn-block btn-sm"
                @click="getResult()"
              >
                {{ trans("text.view-results") }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["title"],

  data() {
    return {
      poll: false,
      result: false,
      error: "",
      poll_id: "",
      view: "poll",
      vote: "",
      ranColor: 0,
    };
  },
  computed: {
    // a computed getter
    poll_multiple_ans: function () {
      if (this.poll && this.poll.pollq_multiple) {
        return 1;
      } else {
        return 0;
      }
    },
    votes: function () {
      if (this.poll && this.poll.pollq_multiple) {
        return [this.vote];
      } else {
        return [this.vote];
      }
    },
  },
  methods: {
    getPoll: function () {
      var self = this;
      axios
        .get("/poll")
        .then(function (response) {
          self.displayRespense(response.data);
        })
        .catch(function (error) {
          self.show_spinner = false;
        });
    },

    getResult: function () {
      this.view = "result";
    },

    getBack: function () {
      this.view = "poll";
    },

    postVote: function () {
      var self = this;
      var data = {
        votes: this.votes,
        poll_id: this.poll_id,
        poll_multiple_ans: this.poll_multiple_ans,
      };
      axios
        .post("/poll", data)
        .then(function (response) {
          self.displayRespense(response.data);
                  Event.$emit('notify', self.trans('text.poll-voted'), 'success', self.trans('text.success'));

        })
        .catch(function (error) {
          self.errors.record(error);
                  Event.$emit('notify', self.trans('text.poll-not-voted'), 'warning', self.trans('text.warning'));

        });
    },

    displayRespense: function (data) {
      switch (data.status) {
        case "poll":
          this.poll = data.poll;
          this.poll_id = data.poll.id;
          this.result = data.result;
          this.view = "poll";
          break;
        case "result":
          this.result = data.result;
          this.view = "result";
          break;
        case "error":
          this.error = data.message;
          this.view = "error";
          break;
      }
      console.log(data);
      this.show_spinner = false;
    },

    randomColor: function (index) {
      var colors = [
        "bg-success",
        "bg-danger",
        "bg-info",
        "bg-warning",
        "bg-secondary",
        "bg-primary",
        "bg-dark",
      ];
      var i = index % colors.lenght;
      var color = colors[index];
      return color;
    },
  },
  mounted() {
    this.getPoll();
  },
};
</script>
