<script setup>
import IconifyIcon from "./components/IconifyIcon.vue";
import axios from "axios";
</script>

<template>
  <div class="d-flex vh-100 align-items-center">
    <div class="mx-auto col-lg-8">
      <form class="rounded-3 border overflow-hidden" @submit.prevent="addTarea()">
        <div class="border-bottom p-3">
          <h3 class="m-0">Lista de Tareas</h3>
        </div>
        <div class="p-3 d-flex gap-2">
          <input v-model="nuevaTarea.nombre" class="form-control" type="text" placeholder="Crear contenido del blog" autocomplete="off" required>
          <button class="btn btn-primary d-flex align-items-center gap-1" type="submit">
            <IconifyIcon icon="material-symbols:add-rounded" size="24" /> Agregar
          </button>
        </div>
        <ul class="px-3">
          <li v-for="tarea in tareas" :key="tarea.id" class="d-flex gap-2 align-items-center border-bottom py-2">
            <span class="flex-fill">{{ tarea.nombre }}</span>
            <button class="btn btn-danger tarea-button" type="button" @click="deleteTarea(tarea.id)">
              <IconifyIcon icon="bi:x-lg" />
            </button>
            <button class="btn btn-primary tarea-button" type="button">
              <IconifyIcon icon="bi:pencil" />
            </button>
            <button class="btn btn-success tarea-button" type="button">
              <IconifyIcon icon="bi:check-lg" @click="completeTarea(tarea)" />
            </button>
          </li>
        </ul>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  components: {
    IconifyIcon
  },
  data() {
    return {
      nuevaTarea: {
        nombre: ""
      },
      tareas: [],
      loading: false
    };
  },
  async mounted() {
    this.tareas = await axios.get("/api/tareas").then(res => res.data).catch(() => []);
    console.info(this.tareas);
  },
  methods: {
    async addTarea () {
      const tarea = await axios.post("/api/tareas", { tarea: this.nuevaTarea }).then(res => res.data).catch(() => {});
      if (!tarea.id) return;
      this.tareas.push(tarea); 
    },
    async deleteTarea (id) {
      const tarea = await axios.delete(`/api/tareas/${id}`).then(res => res.data).catch(() => {});
      if (!tarea.id) return;
      this.tareas = this.tareas.filter(t => t.id !== tarea.id);
    },
    async completeTarea (tarea) {
      const tarea = await axios.put(`/api/tareas/${id}`).then(res => res.data).catch(() => {});
      if (!tarea.id) return;
      this.tareas = this.tareas.map(t => {
        if (t.id === tarea.id) t.completada = tarea.completada;
        return t;
      });
    }
  }
};
</script>
