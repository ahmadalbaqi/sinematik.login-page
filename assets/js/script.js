const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

new FinisherHeader({
  "count": 90,
  "size": {
    "min": 1,
    "max": 20,
    "pulse": 0
  },
  "speed": {
    "x": {
      "min": 0,
      "max": 0.4
    },
    "y": {
      "min": 0,
      "max": 0.1
    }
  },
  "colors": {
    "background": "#800000",
    "particles": [
      "#ffffff",
      "#87ddfe",
      "#acaaff",
      "#1bffc2",
      "#f88aff"
    ]
  },
  "blending": "screen",
  "opacity": {
    "center": 0,
    "edge": 0.4
  },
  "skew": 0,
  "shapes": [
    "c",
    "s",
    "t"
  ]
});