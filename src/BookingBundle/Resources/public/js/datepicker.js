/**
 * Created by Greg on 29/11/2016.
 */

$(function() {
    $('.js_datepicker').datepicker({
        dateFormat: 'dd-MM-yyyy',
        // empêche de réserver sur les jours passés
        minDate: new Date(),
        /*
        fonction pour mettre du CSS sur les jours interdits
         */
        beforeShowDay: function (date) {
            /* le musée du Louvres interdit les réservations les :
             dimanche = 0, mardi = 3
             la semaine commence le dimanche = 0
             */
            if (date.getDay() == 0 || date.getDay() == 3 ) {
                return [false, ''];
            } else {
                return [true, ''];
            }
            // jours fériés : 1er mai, 1er novembre, 25 décembre
            // jours où plus de 1000 billets ont été vendus
        }

        /*
         Array pour supprimer certains jours
         0 = Dimanche
         6 = Samedi
        daysOfWeekDisabled: [0, 3, 01-05-yyyy, 01-11-yyyy, 25-12-yyyy];
        */
    });
});
