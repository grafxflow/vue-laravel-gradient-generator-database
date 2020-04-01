<template>
    <div class="gradient-card">
        <div class="gradient" v-bind:style="gradient"></div>
        <div class="card-info">
            <div class="colour-title">{{ title }}</div>
            <div class="colour-1" :style="colour1">{{ gradient1 }}</div>
            <div class="colour-2" :style="colour2">{{ gradient2 }}</div>
            <b-button class="btn btn-danger btn-sm" @click="del()">Delete</b-button>
            <b-button class="btn btn-default btn-sm" data-id="id" @click="edit()">Edit</b-button>
        </div>
    </div>
</template>

<script>

    import ColorPicker from '../components/ColorPicker';
    import { BButton } from 'bootstrap-vue';

    export default {

        name: 'GradientCard',

        template: '#gradient-card',

        props: {
            id: Number,
            title: String,
            gradient1: String,
            gradient2: String
        },

        data: function () {
            return {
                showNote: true,
                gradient: {
                    background: 'linear-gradient(45deg,' + this.gradient1 + ',' + this.gradient2 + ')'
                },
                colour1: {
                    color: this.gradient1
                },
                colour2: {
                    color: this.gradient2
                },
                defaultColor1: this.gradient1,
                defaultColor2: this.gradient2
            }
        },
        methods: {
            del: function () {
                this.$emit('delete', this.id);
            },

            edit: function () {
                this.$emit('edit', this.id, this.title, this.gradient1, this.gradient2);
            }
        },

        components: {
            ColorPicker,
            'b-button': BButton
        }
    }
</script>
