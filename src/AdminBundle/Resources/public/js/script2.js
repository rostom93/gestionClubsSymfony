
		var _unavailable = [];
		 var _onrequest = [];
		  _unavailable.push('2014-10-23');
		  _unavailable.push('2014-10-24');
		  _unavailable.push('2014-10-25');
		  _unavailable.push('2014-10-26');
		  _unavailable.push('2014-10-27');
		  _unavailable.push('2014-10-28');
		  _unavailable.push('2014-10-29');
		  _unavailable.push('2014-10-30');
		  _unavailable.push('2014-10-31');
		  _unavailable.push('2015-03-03');
		  _unavailable.push('2015-03-04');
		  _unavailable.push('2015-03-05');
		  _unavailable.push('2015-03-06');
		  _unavailable.push('2014-09-04');
		  _unavailable.push('2014-09-05');
		  _unavailable.push('2014-09-06');
		  _unavailable.push('2014-09-07');
		  _unavailable.push('2014-09-08');
		  _unavailable.push('2014-09-09');
		  _unavailable.push('2014-09-10');
		  _unavailable.push('2014-09-11');
		  _unavailable.push('2014-09-12');
		  _unavailable.push('2014-09-13');
		  _unavailable.push('2014-09-16');
		  _unavailable.push('2014-09-17');
		  _unavailable.push('2014-09-18');
		  _unavailable.push('2014-09-19');
		  _unavailable.push('2014-09-20');
		  _unavailable.push('2014-09-21');
		  _unavailable.push('2014-08-22');
		  _unavailable.push('2014-08-23');
		  _unavailable.push('2014-08-24');
		  _unavailable.push('2014-07-01');
		  _unavailable.push('2014-07-02');
		  _unavailable.push('2014-07-03');
		  _unavailable.push('2014-07-04');
		  _unavailable.push('2014-07-05');
		  _unavailable.push('2014-07-06');
		  _unavailable.push('2014-07-07');
		  _unavailable.push('2014-07-08');
		  _unavailable.push('2014-07-09');
		  _unavailable.push('2014-07-10');
		  _unavailable.push('2014-07-11');
		  _unavailable.push('2014-07-12');
		  _unavailable.push('2014-07-13');
		  _unavailable.push('2014-07-14');
		  _unavailable.push('2014-07-15');
		  _unavailable.push('2014-07-16');
		  _unavailable.push('2014-07-17');
		  _unavailable.push('2014-07-18');
		  _unavailable.push('2014-07-19');
		  _unavailable.push('2014-07-20');
		  _unavailable.push('2014-07-21');
		  _unavailable.push('2014-07-22');
		  _unavailable.push('2014-07-23');
		  _unavailable.push('2014-07-24');
		  _unavailable.push('2014-07-25');
		  _unavailable.push('2014-07-26');
		  _unavailable.push('2014-07-27');
		  _unavailable.push('2014-07-28');
		  _unavailable.push('2014-07-29');
		  _unavailable.push('2014-07-30');
		  _unavailable.push('2014-07-31');
		  _unavailable.push('2014-08-01');
		  _unavailable.push('2014-08-02');
		  _unavailable.push('2014-08-03');
		  _unavailable.push('2014-08-04');
		  _unavailable.push('2014-08-05');
		  _unavailable.push('2014-08-06');
		  _unavailable.push('2014-08-07');
		  _unavailable.push('2014-08-08');
		  _unavailable.push('2014-08-09');
		  _unavailable.push('2014-08-10');
		  _unavailable.push('2014-08-11');
		  _unavailable.push('2014-08-12');
		  _unavailable.push('2014-08-13');
		  _unavailable.push('2014-08-14');
		  _unavailable.push('2014-08-15');
		  _unavailable.push('2014-08-16');
		  _unavailable.push('2014-08-17');
		  _unavailable.push('2014-08-18');
		  _unavailable.push('2014-08-19');
		  _unavailable.push('2014-08-20');
		  _unavailable.push('2014-08-21');
		  _unavailable.push('2014-12-30');
		  _unavailable.push('2014-12-31');
		  _unavailable.push('2015-01-01');
		  _unavailable.push('2015-01-02');
		  _unavailable.push('2015-01-03');
		  _unavailable.push('2015-01-25');
		  _unavailable.push('2015-01-26');
		  _unavailable.push('2015-01-27');
		  _unavailable.push('2015-01-28');
		  _unavailable.push('2015-01-29');
		  _unavailable.push('2015-01-30');
		  _unavailable.push('2015-01-31');
		  _unavailable.push('2015-02-01');
		  _unavailable.push('2015-02-02');
		  _unavailable.push('2015-02-03');
		  _unavailable.push('2014-08-25');
		  _unavailable.push('2014-08-26');
		  _unavailable.push('2014-08-27');
		
		var dp2 = new VF_datepicker();
		dp2.datepicker({
			'name': 'rtf_centralbundle_tournoi',
			'start': $('#rtf_centralbundle_tournoi_dateDebutTournoi').attr("value"),
			'end': $('#rtf_centralbundle_tournoi_dateFinTournoi').attr("value"),
			'monthNames': ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
			'dayNames': ['Di','Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
			'startCtrl': $('#fromDisplay2'),
			'endCtrl': $('#toDisplay2'),
			'startDisplay': $('#fromDisplay2'),
			'endDisplay': $('#toDisplay2'),
			'startInput': $('#rtf_centralbundle_tournoi_dateDebutTournoi'),
			'endInput': $('#rtf_centralbundle_tournoi_dateFinTournoi'),
			'startDP': $('#startDP2'),
			'endDP': $('#endDP2'),
			'clearTxt': 'Effacer les dates',
			'unavailable': _unavailable,
			'onrequest': _onrequest,
			'displayFrom': function(from, to){
				console.log(['from display2', from, to]);
			},
			'displayTo': function(from, to){
				console.log(['to display2', from, to]);
			},
			'fromChosen': function(from, to){
				console.log(['from chosen2', from, to]);
			},
			'toChosen': function(from, to){
				console.log(['to chosen2', from, to]);
			},
			'hideFrom': function(from, to){
				console.log(['from hide2', from, to]);
			},
			'hideTo': function(from, to){
				console.log(['to hide2', from, to]);
			},
			'positions': ['left', 'right']
		});
                var dp1 = new VF_datepicker();
		dp1.datepicker({
			'name': 'rtf_centralbundle_entrainement',
			'start': $('#rtf_centralbundle_entrainement_dateDebutEnt').attr("value"),
			'end': $('#rtf_centralbundle_entrainement_dateFinEnt').attr("value"),
			'monthNames': ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
			'dayNames': ['Di','Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
			'startCtrl': $('#fromDisplay1'),
			'endCtrl': $('#toDisplay1'),
			'startDisplay': $('#fromDisplay1'),
			'endDisplay': $('#toDisplay1'),
			'startInput': $('#rtf_centralbundle_entrainement_dateDebutEnt'),
			'endInput': $('#rtf_centralbundle_entrainement_dateFinEnt'),
			'startDP': $('#startDP1'),
			'endDP': $('#endDP1'),
			'clearTxt': 'Effacer les dates',
			'unavailable': _unavailable,
			'onrequest': _onrequest,
			'displayFrom': function(from, to){
				console.log(['from display1', from, to]);
			},
			'displayTo': function(from, to){
				console.log(['to display1', from, to]);
			},
			'fromChosen': function(from, to){
				console.log(['from chosen1', from, to]);
			},
			'toChosen': function(from, to){
				console.log(['to chosen1', from, to]);
			},
			'hideFrom': function(from, to){
				console.log(['from hid1', from, to]);
			},
			'hideTo': function(from, to){
				console.log(['to hide1', from, to]);
			},
			'positions': ['left', 'left']
		});
                