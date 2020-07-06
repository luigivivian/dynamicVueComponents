<template>
    <div class="bar">
        <hr>Componente "Bar"
        <h2>{{block.title}}</h2>
    </div>
</template>

<script>
    export default {
        props: {
            block: Object
        },
        name: "bar"
    };
</script>
