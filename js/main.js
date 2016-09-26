(function () {
    $(document).ready(function () {
        //*Стартовое меню*//
        $('.new_game').click(function () {
            $.post({
                url    : 'index.php?_R=game/guess',
                success : function (data) {
                    var $html = $(data);
                    $('.game_window').html($html);
                }

            });
        });
    });
})();
