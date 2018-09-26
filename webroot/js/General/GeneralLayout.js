$(document).ready(function(){
    
    var maskZipCode         = $('.mask-zip-code');
    var maskPhone           = $('.mask-phone');
    var maskTelephone       = $('.mask-telephone');
    var maskTelephoneAll    = $('.mask-telephone-all');
    var maskCash            = $('.mask-money');
    var maskCpfCnpj         = $('.mask-cpf-cnpj');
    var dataTable           = $('#dataTable');
    var boxSearch           = $('#search');
    var menuBtn             = $("#menu-btn");
    var moreHead            = $(".more-head");
    var modal               = $('.modal');
    var datePicker          = $('.date-picker');
    var materializeTextArea = $('#materialize-textarea');
    
    
    
    maskZipCode.inputmask({mask : '99999-999', showMaskOnHover: false});
    maskPhone.inputmask({mask : '(99) 9999[9]-9999', showMaskOnHover: false});
    maskTelephone.inputmask({mask : '99 99999-9999', showMaskOnHover: false});
    maskTelephoneAll.inputmask({mask : '+99 99 99999-9999', showMaskOnHover: false});
//    maskMoney.inputmask("###.##", {reverse: true, showMaskOnHover: false, alignRight: false, greedy: false,});
    maskCash.maskMoney({thousands:'', decimal:'.', allowZero:true});


    
    maskCpfCnpj.keydown(function(){

        try{
            
            maskCpfCnpj.unmask();
            var tamanho = maskCpfCnpj.val().length;

            if(tamanho < 12){
                maskCpfCnpj.mask("999.999.999-99");
            } else if(tamanho >= 12){
                maskCpfCnpj.mask("99.999.999/9999-99");
            }

            // ajustando foco
            var elem = this;
            setTimeout(function(){
                // mudo a posição do seletor
                elem.selectionStart = elem.selectionEnd = 10000;
            }, 0);
            // reaplico o valor para mudar o foco
            var currentValue = $(this).val();
            $(this).val('');
            $(this).val(currentValue);
        }catch(e){
            console.log(e);
        }
    });


    var searcheable = dataTable.DataTable({
        paging: false,
        info: false,
        searching : true,
        dom: 't'
    });
    
    
    boxSearch.on( 'keyup', function () {
        searcheable.search( this.value ).draw();
    });
    
    
    materializeTextArea.trigger('autoresize');
    menuBtn.sideNav();
    moreHead.sideNav({
        edge: 'right',
        width: 250,
        closeOnClick: true,
    });
    
    modal.modal();
    datePicker.pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        format: 'dd/mm/yyyy',
        closeOnSelect: false // Close upon selecting a date,
    });
    
    Materialize.updateTextFields();
    
});
