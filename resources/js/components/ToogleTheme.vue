<script setup>
import IconifyIcon from "./IconifyIcon.vue";
</script>

<template>
  <span class="text-dark-emphasis" @click="toogleTheme()">
    <IconifyIcon v-if="!dark" role="button" icon="ic:outline-wb-sunny" size="18" />
    <IconifyIcon v-else role="button" icon="ic:outline-nights-stay" size="18" />
  </span>
</template>

<script>
export default {
  data () {
    return {
      dark: JSON.parse(localStorage.getItem("dark"))
    };
  },
  mounted () {
    document.body.setAttribute("data-bs-theme", this.dark ? "dark" : "light");
  },
  methods: {
    toogleTheme () {
      this.dark = !this.dark;
      localStorage.setItem("dark", this.dark);
      document.body.setAttribute("data-bs-theme", this.dark ? "dark" : "light");
    }
  },  
};
</script>
