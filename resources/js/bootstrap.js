window._ = require('lodash');
require('jquery');

import Swal from 'sweetalert2';
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
 


document.addEventListener('livewire:load', () => {
    Livewire.on('swal', function (message,type) {
        Swal.fire({
            icon: type,
            html: message,
            showCancelButton: true,
        }).then(function (result) {
            if (result.isConfirmed) {
                if(type=='delete')
                    livewire.emit('delete')
                else if(type=='question')
                    livewire.emit('confirm')
            }
        })
    });

    Livewire.on('toast', (message,type) => {
        Toast.fire({
            icon: type,
            title: message,
          })      
    });
    Livewire.on('swal-delete', function (message,type,eventEmit,id) {
        Swal.fire({
            icon: type,
            html: message,
            showCancelButton: true,
        }).then(function (result) {
            if (result.isConfirmed) {               
                livewire.emit(eventEmit,id)                
            }
        })
    });

});