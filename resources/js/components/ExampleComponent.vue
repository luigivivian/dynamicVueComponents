<template>
    <div>
        <template v-for="block in content.body">
            <component :is="block.component" :block="block" :key="block._uid"></component>
        </template>
    </div>
</template>

<script>
    import Bar from "./Bar";
    import Foo from "./Foo";
    import Navbar from "./Navbar";
    import Formulario from "./Formulario";

    // #component: qual componente vai ser renderizado
    // headline, title, dados do componente

    export default {
        props: {
            // template pode ser passado por props carregado pelo backend
            // template: Object
        },
        data() {
            return {
                //template pode ser passado dinamicamente carregado pelo backend
                // content: this.template
                content: {
                    body: [
                        {
                            _uid: "BUY6Drn9e1",
                            component: "Navbar",
                            itens: [
                                {
                                    label: "Home",
                                    link: "/home",
                                    ativo: true,
                                },
                                {
                                    label: "Imovel",
                                    link: "/imovel",
                                    ativo: true,
                                },
                                {
                                    label: "Contato",
                                    link: "/contato",
                                    ativo: false,
                                }
                            ]
                        },
                        {
                            _uid: "gJZoSLkfZV",
                            component: "bar",
                            title: "Componente 'bar' dinamico"
                        },
                        {
                            _uid: "X1JAfdsZxy",
                            component: "foo",
                            headline: "titulo declarado dinamicamente"
                        },
                        {
                            _uid: "X1JAfdsZxz",
                            component: "foo",
                            headline: "outro titulo"
                        },
                        {
                            _uid: "X2JAfdsZxy",
                            component: "formulario",
                            action: "post"
                        },
                    ]
                }
            };
        },
        name: "App",
        components: {
            Bar,
            Foo,
            Navbar,
            Formulario
        }
    };
</script>

<style>
    #app {
        font-family: "Avenir", Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
    }
</style>
