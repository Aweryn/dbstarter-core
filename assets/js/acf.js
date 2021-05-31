(function() {

    acf.addAction('acfe/fields/button/success/name=generate', function($el, data){
       alert('PHP Template files generated!');
    });

    acf.addAction('acfe/fields/button/success/name=generate_blade', function($el, data){
       alert('Blade Template files generated!');
    });

    acf.addAction('acfe/fields/button/complete/key=db_search_codex', function($el, data){
       let url = 'https://wordpress.org/search/';
       let keyword = document.getElementById('acf-db_search_codex_title').value;

       let search_url = url + keyword;

       window.open(search_url, "_blank");

       document.getElementById('acf-db_search_codex_title').value = '';
    });

    acf.addAction('acfe/fields/button/complete/key=db_generate_lorem', function($el, data){

        // console.log($el);

        let copyFrom = document.createElement("textarea");
        let text = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit.';

        document.body.appendChild(copyFrom);
        copyFrom.textContent = text;
        copyFrom.select();
        document.execCommand("copy");
        copyFrom.remove();

        alert('Lipsum copied to clipboard');
     });

})();