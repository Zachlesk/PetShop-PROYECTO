<template>
    <div class="principal d-flex">
        <div class="w-25 left-aside d-none d-md-block">
        </div>

        <div class="right-aside w-100">

            <div class="p-3 w-auto d-flex justify-content-end align-items-center">
                <div class="mb-1 me-4" style="height: 3.5rem;">
                    <img src="../assets/logo.png" class="h-100 w-100" alt="">
                </div>
                <span style="color: #272727; font-weight: 700; font-size: 2rem">Petvita</span>
            </div>

            <div class="p-3 w-auto d-flex align-items-center justify-content-center" style="height: 80%;">
                <div class="d-flex wrap flex-column w-75">
                    <div class="d-flex flex-column">
                        <h1>Login</h1>
                        <p>¡Ingresa y sigue cada paso de su bienestar!</p>
                    </div>
                    <div class="d-flex flex-column gap-3 row">
                        <input class="col-12 col-sm-8" type="text" placeholder="Email">
                        <input class="col-12 col-sm-8" type="text" placeholder="Password">
                        <div class="col-12 col-sm-8">
                            ¿No estás registrado? Registrate
                        </div>
                        <button class="col-12 col-sm-8 rounded">Entrar</button>
                    </div>
                </div>
                <!-- <router-link :to="{
                    name: 'introduction'
                }">
                    Intro
                </router-link> -->
            </div>

        </div>

    </div>

</template>

<script>
export default {
    data() {
        return {
            hola: 'hola'
        }
    }
}
</script>

<style scoped>
.principal {
    min-height: 100vh;
    max-height: 100vh;
}

.left-aside {
    min-height: 100vh;
    max-height: 100vh;
    background-color: #5271FF !important;
}

.right-aside {
    min-height: 100vh;
    max-height: 100vh;
}
h1{
    font-size: 62px;
    font-weight: 700;
    margin: 0px;
}

p {
    font-size: 30px;
}

button {
    background: #5271FF;
    color: #fff;
    padding: .5rem;
    border: none;
}
</style>