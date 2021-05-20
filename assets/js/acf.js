(function() {

    acf.addAction('acfe/fields/button/success/name=generate', function($el, data){
       alert('PHP Template files generated!');
    });

    acf.addAction('acfe/fields/button/success/name=generate_blade', function($el, data){
       alert('Blade Template files generated!');
    });

})();