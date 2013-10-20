/**
 * app    : bolettta
 * autor  : Juan Pablo Aqueveque - juque.cl
 * cuando : creado una calurosa mañana de enero 2012
 * log    : 9.ene.2012 11:14:21
 */

(function() {
    var bolettta = (function() {
        var elvalor = $('input[name=valor]');
        var lqdHacer = $('#lqd-hacer');
        var lqdRecibir = $('#lqd-recibir');
        var brtHacer = $('#brt-hacer');
        var brtRecibir = $('#brt-recibir');
        return {
            init: function() {
                $('form').submit(function(e){
                    e.preventDefault();
                })
                $(elvalor).focus();
                $(document).bind('keyup','$',function(){
                    $(elvalor).focus();
                    return false;
                });
                $('input[name=valor]').bind('keyup','n',function(){
                    $(elvalor).val('');
                    return false;
                });
                $(elvalor).keyup(function() {
                    this.value = this.value.replace(/[^\d]/g, '')
                    bolettta.procesa(this);
                });
            },
            procesa: function(v) {
                var bruto = 0.9;
                var liquido = 1.1111111111111112;
                var valor = parseInt(v.value, 10) || 0;
                var resBruto = valor * bruto;
                var resLiquido = valor * liquido;

                $(lqdHacer).text(valor);
                $(lqdRecibir).text(resLiquido);
                $(brtHacer).text(resBruto);
                $(brtRecibir).text(valor);

                $.each([lqdHacer,lqdRecibir,brtRecibir,brtHacer],function(){
                    $(this).formatCurrency({
                        symbol: '$',
                        positiveFormat: '%s %n',
                        negativeFormat: '-%s %n',
                        decimalSymbol: ',',
                        digitGroupSymbol: '.',
                        groupDigits: true,
                        roundToDecimalPlace: 0
                    });
                })
            }
        };
    })();
    bolettta.init();
})();

