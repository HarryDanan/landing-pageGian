  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- sweetalert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
      .colored-toast.swal2-icon-error {
          background-color: #f27474 !important;
      }

      .colored-toast.swal2-icon-success {
          background-color: #a5dc86 !important;
      }
  </style>
  <script>
      async function error_alert_passwordUserSalah() {
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-right',
              iconColor: 'white',
              customClass: {
                  popup: 'colored-toast'
              },
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true
          })
          await Toast.fire({
              icon: 'error',
              title: 'Username / Passsword Salah',
          })
      }
      async function error_alert_passwordUserKosong() {
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-right',
              iconColor: 'white',
              customClass: {
                  popup: 'colored-toast'
              },
              showConfirmButton: false,
              timer: 5000,
              timerProgressBar: true
          })
          await Toast.fire({
              icon: 'error',
              title: 'Username / Passsword Tidak Boleh Kosong',
          })
      }
      async function toast_success_tambah() {
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-right',
              iconColor: 'white',
              customClass: {
                  popup: 'colored-toast'
              },
              showConfirmButton: false,
              timer: 5000,
              timerProgressBar: true
          })
          await Toast.fire({
              icon: 'success',
              title: 'Data Berhasil Di Tambah',
          })
      }
      async function toast_success_update() {
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-right',
              iconColor: 'white',
              customClass: {
                  popup: 'colored-toast'
              },
              showConfirmButton: false,
              timer: 5000,
              timerProgressBar: true
          })
          await Toast.fire({
              icon: 'success',
              title: 'Data Berhasil Di Update',
          })
      }
      async function toast_success_delete() {
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-right',
              iconColor: 'white',
              customClass: {
                  popup: 'colored-toast'
              },
              showConfirmButton: false,
              timer: 5000,
              timerProgressBar: true
          })
          await Toast.fire({
              icon: 'error',
              title: 'Data Berhasil di Hapus',
          })
      }
  </script>