$(document).ready(function() {
    /* ф-я расчета итогов */
    function calculate() {
        let from = $('#from option:selected')
        let to = $('#to option:selected')
        let sum = $('#sum').val()
        let result = $('#result')
        let exchangeRate = $('#exchangeRate')
        let exchangeRateTemplate = `1 ${from.data('code')} = ${from.data('rate') / to.data('rate')} ${to.data('code')}`
        let resultHtml = from.data('rate') * sum / to.data('rate') + ' ' + to.data('code')

        /* выводим результаты */
        result.html(resultHtml)
        exchangeRate.html(exchangeRateTemplate)
    }

    /* ф-я "перевертыш" для валют */
    function switchCurrency(){
        let from = $('#from option:selected').data('code')
        let to = $('#to option:selected').data('code')

        $(`#to option[data-code="${from}"]`).prop('selected', true)
        $(`#from option[data-code="${to}"]`).prop('selected', true)

        calculate()
    }

    /*  вешаем обработчики на элементы "формы" */
    $('#sum').on('input', function() {
        calculate()
    });

    $('select').on('change', function() {
        calculate()
    });

    $('#switch').click(function (){
        switchCurrency()
    });
});