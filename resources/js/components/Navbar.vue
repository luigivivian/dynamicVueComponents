<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" v-for="item in block.itens">
                        <a class="nav-link" v-if="item.ativo==true" :href="item.link">{{item.label}}</a>
                        <a class="nav-link disabled" v-if="item.ativo==false" :href="item.link">{{item.label}}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        props: {
            block: Object
        },
        name: "navbar"
    };
</script>
