import { $fetch } from "ofetch";

class ApiService {

  async getTareas () {
    return await $fetch("/api/tareas", {
      method: "GET"
    }).catch(() => []);
  }

  async addTarea (tarea) {
    return await $fetch("/api/tareas", {
      method: "POST",
      body: { tarea }
    }).catch(() => ({}));
  }

  async deleteTarea (id) {
    return await $fetch(`/api/tareas/${id}`, {
      method: "DELETE"
    }).catch(() => ({}));
  }

  async completeTarea (id, value) {
    return await $fetch(`/api/tareas/${id}`, {
      method: "PATCH",
      body: { completado: value }
    }).catch(() => ({}));
  }

  async modificarTarea (id, tarea) {
    return await $fetch(`/api/tareas/${id}`, {
      method: "PUT",
      body: { tarea }
    }).catch(() => ({}));
  }
}

export default new ApiService();
