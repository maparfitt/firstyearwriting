<template>
    <div>
        <label for="rich-text" class="form-label"></label>
        <quill-editor v-model="form.body"
                      class="mb-3"
                      id="rich-text"
                      rows="20"
                      :options="editorOption"
                      ref="myQuillEditor"
                      @blur="onEditorBlur($event)"
                      @focus="onEditorFocus($event)"
                      @ready="onEditorReady($event)">
        </quill-editor>
    </div>
</template>

<script>
    // Import Quill required dependencies
    import 'quill/dist/quill.core.css'
    import 'quill/dist/quill.snow.css'
    import 'quill/dist/quill.bubble.css'

    import { quillEditor, Quill } from 'vue-quill-editor'

    // Set toolbar options
    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],

        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'indent': '-1'}, {'indent': '+1'}],
        [{'align': []}],

        [{'size': ['small', false, 'large', 'huge']}],
        [{'header': [1, 2, 3, 4, 5, 6, false]}],

        [{'color': []}, {'background': []}],
        [{'font': []}],
        [{'script': 'sub'}, {'script': 'super'}],
        ['link'],
    ];

    export default {
        components: {
            quillEditor
        },
        data() {
            return {
                form: {
                    body: ''
                },
                editorOption: {
                    placeholder: "Enter your text here...",
                    modules: {
                        toolbar: {
                            container: toolbarOptions,
                        },
                        history: {
                            delay: 1000,
                            maxStack: 50,
                            userOnly: false
                        },
                    }
                }
            }
        },
        methods: {
            onEditorBlur(editor) {
                // console.log('editor blur!', editor)
            },
            onEditorFocus(editor) {
                // console.log('editor focus!', editor)
            },
            onEditorReady(editor) {
                // console.log('editor ready!', editor)
            },
            submitForm(){

            }
        },
        computed: {
            editor(){
                return this.$refs.myQuillEditor.quill
            }
        },
    }
</script>