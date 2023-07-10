import axios from "axios";

class ApiService {

  async getTareas () {
    return await axios.get("/api/tareas").then(res => res.data).catch(() => []);
  }

  async addTarea (tarea) {
    return await axios.post("/api/tareas", { tarea }).then(res => res.data).catch(() => ({}));
  }

  async deleteTarea (id) {
    return await axios.delete(`/api/tareas/${id}`).then(res => res.data).catch(() => ({}));
  }

  async completeTarea (id, value) {
    return await axios.patch(`/api/tareas/${id}`, { completado: value }).then(res => res.data).catch(() => ({}));
  }

  async modificarTarea (id, tarea) {
    await axios.put(`/api/tareas/${id}`, { tarea }).then(res => res.data).catch(() => ({}));
  }
}

export default new ApiService();
