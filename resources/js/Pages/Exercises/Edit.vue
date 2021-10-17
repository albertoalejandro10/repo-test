<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de Actividades
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h2 class="text-lg text-gray-900">Editar una actividad</h2>
                            <p class="text-sm text-gray-600">Si editas no podras volver al estado anterior</p>
                        </div>
                    </div>
                    <div class="md:col-span-4 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <form @submit.prevent="submit">
                                <label class="block font-medium text-sm text-gray-700">
                                    Resumen
                                </label>
                                <textarea 
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.title"
                                > </textarea>

                                <label class="block font-medium text-sm text-gray-700">
                                    Contenido
                                </label>
                                <textarea 
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.description"
                                    rows="8"
                                > </textarea>
                                <button 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4"
                                >Editar</button>
                            </form>

                            <hr class="my-6">

                            <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-5" href="#" @click.prevent="destroy">
                                Eliminar Actividad
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Link,
        },
        props: {
            exercise: Object,
        },
        data () {
            return {
                form: {
                    title: this.exercise.title,
                    description: this.exercise.description,
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.put(this.route('exercises.update', this.exercise.id), this.form)
            },
            destroy() {
                if ( confirm('¿Desea eliminar?')) {
                    this.$inertia.delete(this.route('exercises.destroy', this.exercise.id))
                }
            }
        }
    })
</script>