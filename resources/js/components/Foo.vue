<template>
    <div class="foo">
        <hr>olá mundo, componente dinamico "foo"
        <h2>{{block.headline}}</h2>
    </div>
</template>

<script>
    export default {
        props: {
            block: Object
        },
        name: "foo"
    };
</script>
