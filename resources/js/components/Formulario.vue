<template>
    <div class="container-fluid mt-5">
        <div class="row center">
            <div class="col col-md-6 offset-3">
                <form :action="block.action">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartilhe seu email com terceiros.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            block: Object
        },
        name: "formulario"
    };
</script>
