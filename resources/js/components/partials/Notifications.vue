<template></template>
<script>
export default {
  template: "app",
  name: "app",
  props: ["active", "message", "type", "title"],
  data() {
    return {
      notification: {
        message: this.message,
        type: this.type,
        title: this.title,
      },
    };
  },
  methods: {
    showNotification: function () {
      switch (this.notification.type) {
        case "danger":
          this.icon = "danger.svg";
          this.progressBarColor = "#094054";
          this.iconColor = "#094054";
          break;
        case "info":
          this.icon = "info.svg";
          this.progressBarColor = "#094054";
          this.iconColor = "#094054";
          break;
        case "success":
          this.icon = "success.svg";
          this.progressBarColor = "#2d8e56";
          this.iconColor = "#094054";
          break;
        case "warning":
          this.icon = "warning.svg";
          this.progressBarColor = "#d47f17";
          this.iconColor = "#094054";
          break;
      }
      this.$toast.show(this.notification.message, this.notification.title, {
        rtl: true,
        icon: "",
        image: "/img/icons/" + this.icon,
        imageWidth: 5,
        iconColor: this.iconColor,
        //timeout: 2000000,
        class: this.notification.type,
        theme: "light",
        transitionIn: "flipInX",
        progressBarColor: this.progressBarColor,
      });
    },
  },
  mounted() {
    if (this.active == "true") {
      this.showNotification();
    }
  },
  created() {
    var self = this;
    Event.$on("notify", function (message, type, title) {
      self.notification.message = message;
      self.notification.type = type;
      self.notification.title = title;
      self.showNotification();
    });
  },
};
</script>
