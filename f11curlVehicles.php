<?php
$ch = curl_init();

$params ='{
    "request": [
      {
        "cve_vehicle": 45757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35683,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42905,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47905,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47854,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47860,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47847,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34499,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41831,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39912,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45854,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45853,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45860,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46621,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47516,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42544,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42556,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47522,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47527,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42680,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12718,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42847,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33281,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78535,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46522,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11730,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9599,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46622,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42522,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42853,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46718,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9853,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26313,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9854,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44499,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26905,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34977,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36575,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45466,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26915,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16621,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45482,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48482,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48470,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78453,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48565,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48556,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48313,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48322,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78482,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78477,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78281,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48581,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48522,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48516,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48527,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48536,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10924,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44535,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78439,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78008,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 49994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 52337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 50239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 52094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 51460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 53909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 52878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 53567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 53222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 50512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 50879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 51772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 54196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 51117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 52621,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45544,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38924,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34752,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47535,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37621,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35008,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78536,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44821,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32915,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1732,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45781,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38831,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44502,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34570,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11718,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45835,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35544,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28870,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16536,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20770,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42573,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37453,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45470,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9821,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21522,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21322,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34527,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41826,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28781,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28770,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32769,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9826,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47912,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34482,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22439,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37535,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24502,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28835,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28912,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13730,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37573,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22482,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29720,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39603,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29477,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42581,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78755,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78752,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78581,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78622,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78630,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78853,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78977,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78603,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78599,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78781,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78680,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78683,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79008,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44680,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19516,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30854,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30732,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29527,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78912,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78718,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32826,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37575,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44683,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47770,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47536,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43977,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10977,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34915,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47821,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47781,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39556,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47755,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47765,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48720,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48718,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48599,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48603,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47718,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47720,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9581,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47680,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47630,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46860,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46854,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46853,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48770,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48781,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48769,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48630,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48765,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44905,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46281,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46313,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46322,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46453,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46470,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46466,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46471,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46680,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46683,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47008,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46732,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46755,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46826,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46821,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46847,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46831,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46905,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46977,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46870,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46730,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23683,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30847,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30853,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41499,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38835,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45630,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8544,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26466,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35516,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26470,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 70968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35281,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45765,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46912,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9575,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37556,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77915,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45769,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34599,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35313,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32630,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16499,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21924,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35322,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45752,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24870,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19622,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19770,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34565,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28573,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21516,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25826,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26536,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31730,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41835,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9603,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37924,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34536,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34466,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78765,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34821,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45718,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32603,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38860,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39570,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44854,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8924,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36621,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34755,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19915,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10322,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38847,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1683,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20732,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20769,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44536,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34544,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9683,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44720,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48453,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32575,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9570,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34556,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34313,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37565,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44439,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14471,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78527,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33781,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35522,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48755,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42630,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38826,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12847,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43630,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43008,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78720,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78769,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78915,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78847,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78831,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48535,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78870,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48575,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78905,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78821,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78854,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78924,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38621,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42477,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45915,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42831,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44581,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44522,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43313,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43322,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42471,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46573,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44924,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44977,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48281,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47622,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43924,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45755,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38603,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44860,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78575,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78573,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48680,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78570,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78565,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42621,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48732,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78544,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48752,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34535,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47915,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20281,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34502,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34770,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16313,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47683,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34471,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38821,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14466,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34439,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44544,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34730,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78516,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32835,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32755,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38853,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37570,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11720,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39008,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32599,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14730,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14621,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21581,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37915,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39847,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37630,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46835,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48477,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30998,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16769,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16765,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13683,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39870,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45471,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48870,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18924,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31581,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44599,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17439,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17453,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28008,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47466,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25482,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17466,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25630,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42499,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46502,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16860,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 69183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48666,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22135,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44466,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39755,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28826,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32854,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40381,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38671,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28536,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39974,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39850,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32953,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46720,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39844,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42798,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16502,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13800,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11281,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11285,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9293,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78502,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32912,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46618,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45960,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46499,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47084,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39765,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16471,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39313,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42570,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39835,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39914,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40008,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45535,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41565,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45536,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11982,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13821,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47322,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47769,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36068,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39502,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28720,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36069,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36071,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39499,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28730,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30886,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39453,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28755,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39516,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39527,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39477,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39439,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39575,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34959,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41591,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17853,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16581,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29008,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42990,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43048,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35387,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24951,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44603,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38471,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45603,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38477,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38357,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38470,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38388,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38453,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38439,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38482,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38466,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78322,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13981,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29769,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30763,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25389,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43575,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26527,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25903,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27274,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18077,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4770,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27826,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28470,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13847,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32720,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32622,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43966,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43954,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16516,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44601,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13791,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13752,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12003,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44598,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10726,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9905,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44453,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42797,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44482,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44471,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44459,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44477,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42955,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44485,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44470,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42780,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19898,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19899,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19892,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34002,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22133,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10696,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42073,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44587,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11846,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44761,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39975,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39977,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44626,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40134,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40087,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40093,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19778,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10781,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12835,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10583,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19094,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12669,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18752,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17281,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20533,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17079,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27113,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39984,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12120,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47496,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19988,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47804,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42078,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42070,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32784,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17893,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45723,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40054,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11977,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39995,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40009,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10625,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45680,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47849,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16957,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45786,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45391,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19314,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29535,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15252,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45358,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42565,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15245,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45140,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45142,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14794,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14771,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45146,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14793,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14613,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14729,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14544,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14732,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45216,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45217,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14556,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14845,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14890,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45218,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14736,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14728,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14548,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14727,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45269,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14883,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45147,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14547,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45151,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14549,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14738,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45322,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16267,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16281,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16273,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16718,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45304,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45384,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25907,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25908,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26752,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16307,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35599,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45225,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15024,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15020,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45221,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45231,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45232,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15036,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15038,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15034,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15045,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16277,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14374,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27985,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31632,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31614,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31615,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16448,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48505,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43455,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45827,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39088,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32178,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39099,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32191,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32205,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39416,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28659,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12661,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18782,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 540,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 529,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19316,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 311,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 366,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43470,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 359,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 343,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 362,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48507,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14565,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 260,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 7848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 369,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43471,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14722,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 305,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 373,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39056,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43037,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43473,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45829,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45817,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 435,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31619,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 360,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 167,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 454,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45830,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 202,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 244,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 228,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 441,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 235,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 319,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 372,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 312,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 284,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 537,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39058,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 442,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 444,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 452,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 532,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 447,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 446,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31621,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38595,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 276,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 570,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39545,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 484,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 2031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43475,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 434,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8870,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 483,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39095,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 282,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18141,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 266,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 242,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 486,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42278,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28675,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 573,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 313,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13303,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14603,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19338,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16379,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45832,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42631,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 2,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43479,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 428,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 49,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31627,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47553,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36062,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 53,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45820,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14978,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 56,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 57,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 2029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 58,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 59,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45821,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 60,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20916,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45822,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 65,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 599,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 66,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 5,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 67,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 203,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 70,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 71,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47602,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 75,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16378,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20154,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45121,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32237,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 622,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 80,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 81,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 576,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39107,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 265,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45122,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 286,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45824,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45825,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 87,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38368,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 3,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47609,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39108,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47611,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39105,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 464,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 89,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 90,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14223,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 92,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 93,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 94,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 95,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14224,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 97,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 98,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40046,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13325,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13219,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13462,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13306,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13220,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13324,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13308,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13309,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13449,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13310,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13463,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14182,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18420,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39103,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19192,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18423,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21565,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21566,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21567,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21568,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39098,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38639,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38637,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38588,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45834,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31752,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36060,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36057,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32815,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31332,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31334,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31336,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31339,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31340,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32298,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32299,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32300,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32302,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32392,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32395,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32396,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35677,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38635,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38634,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79175,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79180,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79153,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79155,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47187,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79168,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79171,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44858,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10597,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41522,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41513,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41515,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41509,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10592,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24422,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45487,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28104,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42594,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44881,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24417,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24430,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10589,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10585,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11506,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11508,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10586,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17128,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40189,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40166,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40139,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40145,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44582,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44361,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40156,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40186,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40149,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10580,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24796,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44554,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17897,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16125,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16124,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16126,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16127,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26504,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29499,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32962,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35668,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31425,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32654,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45983,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17991,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17971,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30730,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17973,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22029,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27976,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18956,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17989,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9169,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25065,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24367,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16958,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17469,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17482,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17289,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17118,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17082,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17081,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17111,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17129,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17806,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18645,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17328,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25799,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13556,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10584,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46923,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45581,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29913,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31067,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30552,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16807,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16809,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20263,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16812,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16814,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17688,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17689,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17692,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28240,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29816,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17693,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17695,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17697,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21851,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21835,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48258,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18708,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17710,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17712,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21840,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17714,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30579,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45030,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39801,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39792,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22480,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24572,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11662,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39927,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39842,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39833,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26264,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44811,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13555,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12233,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26074,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11511,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30664,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11937,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11946,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11941,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10564,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10563,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11947,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13403,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11938,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13805,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14330,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14329,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26254,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32754,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11932,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11948,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11942,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31431,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42836,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78476,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46526,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47272,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43321,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43320,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24375,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39773,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44596,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38370,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32028,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78760,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22610,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45919,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39076,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32043,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39839,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32467,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24653,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24652,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31644,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33753,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39831,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25802,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14213,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14214,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14212,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9363,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32234,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36066,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40047,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26465,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26035,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40152,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41562,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44204,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42519,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30856,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44565,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39616,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43911,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43918,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43926,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43633,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43905,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39317,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45808,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40110,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40115,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40114,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40229,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32236,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31248,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44841,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44853,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29318,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43275,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29354,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44895,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21819,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29624,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29623,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29725,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29724,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29700,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42999,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45701,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21049,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22694,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27137,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43019,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46136,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48574,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33052,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19112,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28144,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41917,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27550,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32474,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32704,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27295,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27365,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45559,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31270,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28620,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28658,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36980,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28764,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28767,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30810,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28593,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30745,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33759,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28691,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28765,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28769,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28717,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28651,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28686,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37400,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38385,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42861,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9337,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37401,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38386,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38397,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47921,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47497,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21016,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41891,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42862,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37080,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36880,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39085,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9143,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38199,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38200,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38201,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15679,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45992,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27936,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27925,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28571,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32261,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16672,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32280,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30818,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9541,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32262,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32238,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29628,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13226,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16405,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32259,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16406,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32297,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16408,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15676,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36979,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27843,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18371,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27904,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21398,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39629,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35943,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37044,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36879,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36117,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47929,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18705,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41878,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42997,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28660,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32707,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43001,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17777,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18255,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 77928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35097,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24656,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48573,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48402,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41857,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45770,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45766,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16064,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46022,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19928,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41993,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45558,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45557,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45826,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47931,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42000,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78421,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78433,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19323,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45418,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28399,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45600,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15667,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 16678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44407,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29648,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39740,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45783,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15673,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27888,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27023,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20940,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17774,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45642,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20896,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48383,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 49050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48617,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32510,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45719,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46527,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40230,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33014,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45838,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41894,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37132,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37130,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44355,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37131,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34852,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37636,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21250,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36150,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21253,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24072,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46560,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46561,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33198,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36967,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38215,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45837,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44855,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43102,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43100,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42050,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 356,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14684,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14716,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 8678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 539,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 347,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 206,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 315,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 301,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 426,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 530,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 331,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 12789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 438,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 283,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9015,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 376,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 209,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20394,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1665,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 290,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28605,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23436,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19194,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 569,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 437,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 326,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19195,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28268,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 210,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13922,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42287,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 488,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19196,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 18721,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45865,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 351,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45706,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45702,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28685,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28687,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28703,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79055,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 46531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45813,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43432,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38823,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 43415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 29443,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10528,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31061,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31063,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31059,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10527,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9089,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9090,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9092,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10525,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38939,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20776,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 20775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10521,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10520,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30972,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10517,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27053,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32518,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11380,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32746,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37051,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78197,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42577,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42578,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23641,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28288,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36933,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33739,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33744,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39116,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35963,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35604,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35606,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35538,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35543,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35612,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36256,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36257,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36271,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38887,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35451,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41910,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35523,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35524,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36123,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36119,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33741,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33742,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38670,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33737,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37906,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36158,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35427,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35429,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42854,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23424,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36021,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31757,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31756,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34828,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39279,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39041,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36944,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 23961,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48353,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48795,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37382,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39040,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36945,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35713,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35715,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33239,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26039,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35512,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36964,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26042,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36649,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39534,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39531,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33222,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36025,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35439,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30968,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37007,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36965,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31743,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37091,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37188,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37190,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33148,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37172,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34377,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31748,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39010,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36183,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36184,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 27439,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45033,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45096,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45101,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42501,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42503,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42643,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42640,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35996,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39803,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 36885,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79193,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47470,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 15638,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9174,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47952,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30657,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30109,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30106,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4775,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4789,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4790,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 4788,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19208,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11390,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10500,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39083,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19884,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19905,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19871,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19872,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19873,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19874,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19875,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19876,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19877,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19900,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19901,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37086,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42735,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42734,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42882,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40243,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42733,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42747,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42787,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40296,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42450,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33018,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42164,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 24674,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30986,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42160,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22681,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22682,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32969,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39544,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25934,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 26481,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 17930,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39185,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42404,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32848,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40341,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42075,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42165,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 44970,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19247,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33542,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19241,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32902,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19246,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39607,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22709,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42161,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28456,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28457,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28458,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 22678,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32758,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28460,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 28461,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32859,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 33749,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34176,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47333,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47364,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42445,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39170,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39177,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39181,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39173,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32762,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 30994,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 34866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 40292,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 32765,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42779,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41590,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39711,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19251,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35663,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19249,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42157,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41987,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41650,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41785,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 10499,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39889,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21920,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 21867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42011,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48327,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79032,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31772,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1468,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45869,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45699,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45866,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47472,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 38179,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25159,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47949,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35646,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 11698,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47950,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1393,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37551,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47498,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 45935,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78335,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25004,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25005,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1419,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25012,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25013,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 19211,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25017,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78344,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1440,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 41909,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25026,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25027,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25162,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35608,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9690,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 25163,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 1478,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78345,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35647,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47492,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78352,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47415,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 35655,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47412,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78867,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78860,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47490,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47491,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47495,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78868,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78350,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47410,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78864,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47414,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78342,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47493,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78346,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47409,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47413,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78349,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47489,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47494,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 37546,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 31768,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78514,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47751,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47750,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78348,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14294,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 47411,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 78863,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 39006,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9207,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 13227,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 79031,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 42731,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 48138,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 14291,
        "origin_adm": 1
      },
      {
        "cve_vehicle": 9202,
        "origin_adm": 1
      },
      {
        "origin_adm": 1