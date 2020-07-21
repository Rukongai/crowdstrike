    <h2 data-i18n="crowdstrike.client_tab"></h2>

    <div id="crowdstrike-msg" data-i18n="listing.loading" class="col-lg-12 text-center"></div>

    <div id="crowdstrike-view" class="row hide">
        <div class="col-md-6">
            <table class="table table-striped">
                <tr>
                    <th data-i18n="crowdstrike.sensor_id"></th>
                    <td id="crowdstrike-sensor_id"></td>
                </tr>
                <tr>
                    <th data-i18n="crowdstrike.sensor_version"></th>
                    <td id="crowdstrike-sensor_version"></td>
                </tr>
                <tr>
                    <th data-i18n="crowdstrike.customer_id"></th>
                    <td id="crowdstrike-customer_id"></td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
        </div>
    </div>

<script>
$(document).on('appReady', function(e, lang) {

    // Get crowdstrike data
    $.getJSON( appUrl + '/module/crowdstrike/get_data/' + serialNumber, function( data ) {
            // Hide
            $('#crowdstrike-msg').text('');
            $('#crowdstrike-view').removeClass('hide');

            // Add strings
            $('#crowdstrike-sensor_id').text(data.sensor_id);
            $('#crowdstrike-sensor_version').text(data.sensor_version);
            $('#crowdstrike-customer_id').text(data.customer_id);
        });
});

</script>
