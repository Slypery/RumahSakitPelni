import './bootstrap';
import jquery from 'jquery';
window.$ = window.jQuery = jquery;
import 'datatables.net';
import 'datatables.net-responsive';
import Swal from 'sweetalert2';
window.Swal = Swal;
import './sidebar_handler';
import './modal';

$(() => {
    setTimeout(() => {
        $('main').removeClass('opacity-0');
    }, 150);
})