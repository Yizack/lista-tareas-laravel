import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import { fileURLToPath } from "url";


export default defineConfig({
  plugins: [
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true,
    }),
    vue({
      template: {
        base: null,
        includeAbsolute: false
      }
    }),
  ],
  resolve: {
    alias: {
      "~": fileURLToPath(new URL("./resources/js", import.meta.url))
    }
  }
});
