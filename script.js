function ready(f) {
  /in/.test(document.readyState) ? setTimeout('ready(' + f + ')', 9) : f();
}
ready(function () {
  var container = new Vue({
    el: '#container',
    data() {
      return {
        placeholderName: 'Введите кличку',
        placeholderService: 'Введите услугу',
        vNickname: '',
        vService: '',
        placeholderEmail: 'Введите email',
        placeholderPassword: 'Введите пароль',
        valueEmail: '',
        valuePassword: '',
        services: [],
      }
    },
    methods: {
      inNickname(event) {
        this.vNickname = event.target.value;
      },
      inService(event) {
        this.vService = event.target.value;
      },
      button() {
        if (this.vNickname === '' && this.vService === '') {
          return
        };
        this.services.push({
          name: this.vNickname,
          service: this.vService,
          condition: this.default
        });
        this.vNickname = '';
        this.vService = '';
      },
      inputEmail(event) {
        this.valueEmail = event.target.value;
      },
      inputPassword(event) {
        this.valuePassword = event.target.value;
      },
      consoleData() {
        console.log(`email: ${this.valueEmail} password: ${this.valuePassword}`);
        this.valueEmail = '';
        this.valuePassword = '';
      }

    }
  })
});
