<template>
  <div class="video-item">
    <youtube :video-id="videoId"></youtube>
  </div>
</template>

<script>
import { getIdFromURL, getTimeFromURL } from "vue-youtube-embed";

export default {
  props: ["url"],
  data() {
    return {
      videoId: "",
    };
  },
  mounted() {
    this.videoId = getIdFromURL(this.url);
  },
};
</script>
