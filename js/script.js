const app = new Vue({
  el: '.container',
  data() {
    return {
      vNickname: '',
      vService: '',
      vLogin: '',
      vPassword: '',
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
      });
      this.vNickname = '';
      this.vService = '';
    },
    inLogin(event) {
      this.vLogin = event.target.value;
    },
    inPassword(event) {
      this.vPassword = event.target.value;
    },
    click() {
      console.log(`login: ${this.vLogin} password: ${this.vPassword}`);
      this.vLogin = '';
      this.vPassword = '';
    }

  }
});
