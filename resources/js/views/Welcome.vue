<template>
    <div>

        <div id="gradients" class="row">
            <!-- Loop through the gradients -->
            <gradient-card v-for="gradient in gradients"
                :key="componentKey"
                v-bind:id="gradient.id"
                v-bind:title="gradient.title"
                v-bind:gradient1="gradient.gradient1"
                v-bind:gradient2="gradient.gradient2"
                @delete="del"
                @edit="edit"
                />
            </gradient-card>

        </div>


        <div>
            <b-button v-b-modal.modal-1>Add a new Gradient</b-button>

            <b-modal ref="modal-1" id="modal-1" title="Add a new Gradient" hide-footer>

                <b-form>
                    <b-form-group
                    id="input-group-1"
                    label="Title:"
                    label-for="input-1"
                    >
                        <b-form-input
                        id="input-1"
                        v-model="form.title"
                        type="text"
                        required
                        placeholder="Enter Title"
                        ></b-form-input>
                    </b-form-group>
                </b-form>

                <color-picker :color="defaultColor1" v-model="form.gradient1" />

                <color-picker :color="defaultColor2" v-model="form.gradient2" />

                <b-button class="mt-2" variant="success" block @click="store">Submit</b-button>

            </b-modal>


            <b-modal ref="modal-2" id="modal-2" title="Edit the Gradient" hide-footer>

                <b-form>

                    <b-form-group
                    id="input-group-1"
                    label="Title:"
                    label-for="input-1"
                    >
                        <b-form-input
                        v-model="form.title"
                        type="text"
                        required
                        placeholder="Enter Title"
                        ></b-form-input>
                    </b-form-group>

                    <color-picker :color="form.gradient1" v-model="form.gradient1" />

                    <color-picker :color="form.gradient2" v-model="form.gradient2"  />

                    <b-button class="mt-2" variant="success" block @click="update">Update</b-button>

                </b-form>

            </b-modal>
        </div>


    </div>
</template>

<script>

function Gradient({ id, title, gradient1, gradient2 }) {
    this.id = id;
    this.title = title;
    this.gradient1 = gradient1;
    this.gradient2 = gradient2;
}

import GradientCard from '../components/GradientCard';
import ColorPicker from '../components/ColorPicker';
import { BButton, BModal, VBModal, BForm, BFormGroup, BFormInput } from 'bootstrap-vue';

export default {

    data: function () {
        return {
            componentKey: 0,
            form: {
                id: '',
                title: '',
                gradient1: '',
                gradient2: ''
            },
            color: '',
            showNote: false,
            gradients: [],
            showModal: false,
            defaultColor1: '#000000',
            defaultColor2: '#000000',
            defaultEditColor1: '#000000',
            defaultEditColor2: '#000000',
            gradientsEdit: {},
        }
    },

    methods: {
        // Read/Show the database gradients
        async read() {
            const { data } = await window.axios.get('/api/gradients');
            data.forEach(gradient => this.gradients.push(new Gradient(gradient)));
        },

        async store(evt) {
            evt.preventDefault();
            await window.axios.post(`/api/gradients`, this.form );

            const { data } = await window.axios.get('/api/gradients');
            this.gradients = [];
            data.forEach(gradient => this.gradients.push(new Gradient(gradient)));
            this.$refs['modal-1'].hide();
            this.form.title = '';
            this.form.gradient1 = "";
            this.form.gradient2 = "";
        },

        async update(evt) {
            evt.preventDefault();
            await window.axios.put(`/api/gradients/${this.form.id }`, this.form );
            this.gradients.find(gradient => gradient.id === this.form.id).title = this.form.title;
            this.gradients.find(gradient => gradient.id === this.form.id).gradient1 = this.form.gradient1;
            this.gradients.find(gradient => gradient.id === this.form.id).gradient2 = this.form.gradient2;
            this.gradients.find(gradient => gradient.id === this.form.id).colour1 = this.form.gradient2;
            this.gradients.find(gradient => gradient.id === this.form.id).colour2 = this.form.gradient2;
            this.gradients.find(gradient => gradient.id === this.form.id).gradient = "background: 'linear-gradient(45deg,'" + this.form.gradient1 + "','" + this.form.gradient2 + "')'";

            this.componentKey += 1;
            this.form.title = '';
            this.form.gradient1 = "";
            this.form.gradient2 = "";
            this.$refs['modal-2'].hide();
        },

        async del(id) {
            await window.axios.delete(`/api/gradients/${id}`);
            this.componentKey += 1;
            let index = this.gradients.findIndex(gradient => gradient.id === id);
            this.gradients.splice(index, 1);
        },

        async edit(id, title, gradient1, gradient2) {
            this.form.id = id;
            this.form.title = title;
            this.form.gradient1 = gradient1;
            this.form.gradient2 = gradient2;
            this.$refs['modal-2'].show();
        }
    },

    components: {
        ColorPicker,
        BModal,
        BForm,
        BFormGroup,
        BFormInput,
        GradientCard,
        'b-button': BButton
    },

    directives: {
        'b-modal': VBModal
    },

    created() {
        this.read();
    }
}
</script>

<style scoped>
</style>
