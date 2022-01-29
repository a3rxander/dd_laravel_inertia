<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de Asignaturas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">  
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px0">
                            <h3 class="text-lg text-gray-900">Editar Asignatura:</h3>
                            <p class="text-sm text-gray-600">Si editas no podrás volver al estado anterior</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <form @submit.prevent="submit">
                                <label class="block font-medium text-sm text-gray-700">
                                    Nombre:
                                </label>
                                <input  type="text"
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.v_name"
                                >
                                <button 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                                >Editar</button>
                            </form>

                            
                            <hr class="my-6">

                            <a href="#" @click.prevent="destroy">
                                Eliminar Nota
                            </a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    export default {
        components: {
            AppLayout,
        },
        props: {
            asignatura: Object,
        },
        data () {
            return {
                form: {
                    v_name: this.asignatura.v_name,
                }
            }
        },
        
        methods: {
            submit() {
                this.$inertia.put(this.route('asignaturas.update', this.asignatura.id), this.form)
            },
            destroy() {
                if (confirm('¿Desea Eliminar?')) {
                    this.$inertia.delete(this.route('asignaturas.destroy', this.asignatura.id))
                }
            }
        }
    }
</script>