<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login de usuario</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/vue@next"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css -->
</head>

<body class="bg-gray-50">
<main class="bg-gray-50" id="app">
  <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">

    <a href="https://demo.themesberg.com/windster/" class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
      <img src="https://demo.themesberg.com/windster/images/logo.svg" class="h-10 mr-4" alt="Windster Logo">
      <span class="self-center text-2xl font-bold whitespace-nowrap">Lineysoft</span>
    </a>

    <div class="bg-white shadow rounded-lg md:mt-0 w-full sm:max-w-screen-sm xl:p-0">
      <div class="p-6 sm:p-8 lg:p-16 space-y-8">
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-700">
          Iniciar Session
        </h2>
        <p>
          <div v-for="error in errors">
            <span class="text-red-500">{{error.message}}</span>
          </div>
        </p>
        <form class="mt-8 space-y-6" action="#">
          <div>
            <label_>Your email</label_>
            <input_ type="email" placeholder="tucorreo@gmail.com" v-model="item.usuario"/>
          </div>
          <div>
            <label_>Your password</label_>
            <input_ type="password" v-model="item.password" placeholder="••••••••"/>
          </div>
          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-5 w-4 rounded" required>
            </div>
            <div class="text-base ml-3">
              <label for="remember" class="font-medium text-gray-900">Recordarme</label>
            </div>
            <a href="#" class="text-base text-teal-600 hover:underline ml-auto">Olvidaste tu Contrasenia?</a>
          </div>
          <button_ color="cyan" @click="sendItem">Iniciar Session</button_>
          <!--<div class="text-sm font-medium text-gray-500">
            Not registered? <a href="https://demo.themesberg.com/windster/authentication/sign-up/" class="text-teal-500 hover:underline">Create account</a>
          </div>-->
        </form>
      </div>
    </div>
  </div>
</main>
<script type="application/javascript">
  const {createApp} = Vue;
  const app = createApp({
    data() {
      return {
        item: {
          usuario: "elnaufrago2009@gmail.com",
          password: "moiseslinar3s"
        },
        errors: {}
      }
    },
    methods: {
      async sendItem (){
        let result = await axios.post('./api/login', JSON.stringify(this.item));
        //console.log(this.item)
        if(result.data.success === true){
          window.location.href = "./documentos";
          console.log('true')
        }else{
          this.errors = result.data.errors;
          console.log(this.errors)
        }        
      }
    }
  });
  app.component('input_', {
    template: `
      <input
        :type="type"
        :value="modelValue"
        @change="$emit('update:modelValue', $event.target.value)"
        class="
          bg-gray-50
          border border-gray-300
          text-gray-900 sm:text-base
          rounded-lg
          focus:outline-none focus:border-cyan-600 focus:ring-cyan-600 focus:ring-2
          block w-full p-2.5"
        :placeholder="placeholder" />`,
    props: {
      type: String,
      placeholder: String,
      modelValue: String
    }
  });
  app.component('label_', {
    template: `<label class="text-base font-medium text-gray-700 block mb-2"><slot></slot></label>`,
  });
  app.component('button_', {
    template: `<button type="button"
      :class="[
          this.color == 'cyan' ? 'text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center' : ''
      ]"
      :disabled="disabled"><slot></slot></button>`,
    props: {
      color: String,
      disabled: Boolean
    }
  });
  app.mount('#app');
</script>
</body>
</html>