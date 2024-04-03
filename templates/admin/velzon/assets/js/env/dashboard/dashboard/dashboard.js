'use strict';

var ExAsUser = (function() {
    const assetNumber = window.location.pathname.split("/").pop();
    var MAIN = 'dashboard/asset/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);

    var ses = ExAs.uXvbI(all_session);

    var loadData = function(){                 
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN,
            method: "POST",
            data: {
                scrty: true
            },
            success: function(response) {
                console.log(response);
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon);
                    console.log({res});
                    $("#total_asset_building").html(res.data.building);
                    $("#total_asset_structure").html(res.data.structure);
                    $("#total_asset_machinery").html(res.data.machinery);
                    $("#total_asset_vehicle").html(res.data.vehicle);
                    $("#total_asset_tools_fixture").html(res.data.tools_fixture);
                    $("#total_asset_auc").html(res.data.auc);
                    $("#total_asset_lahan").html(res.data.lahan);
                    $("#total_asset_ano").html(res.data.ano);
                }
            },
            error: function(e) {
                
            },
        });
    }

    return {
        run: function() {
            loadData();            
        },
        refresh: function() { 
        }
    }
})();

ExAs.Dom(ExAsUser.run())
