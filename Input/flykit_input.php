<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $mw_isn= $_POST['mw_isn'];
                $mw_ipn= $_POST['mw_ipn'];
                $mw_tanggal= $_POST['mw_tanggal'];
                $mw_tanggal= date('Y-m-d', strtotime($mw_tanggal));
                $nw_isn= $_POST['nw_isn'];
                $nw_ipn= $_POST['nw_ipn'];
                $nw_tanggal= $_POST['nw_tanggal'];
                $nw_tanggal= date('Y-m-d', strtotime($nw_tanggal));
                $mtw_isn= $_POST['mtw_isn'];
                $mtw_ipn= $_POST['mtw_ipn'];
                $mtw_tanggal= $_POST['mtw_tanggal'];
                $mtw_tanggal= date('Y-m-d', strtotime($mtw_tanggal));
                $ntw_isn= $_POST['ntw_isn'];
                $ntw_ipn= $_POST['ntw_ipn'];
                $ntw_tanggal= $_POST['ntw_tanggal'];
                $ntw_tanggal= date('Y-m-d', strtotime($ntw_tanggal));
                $nmj_isn= $_POST['nmj_isn'];
                $nmj_ipn= $_POST['nmj_ipn'];
                $nmj_tanggal= $_POST['nmj_tanggal'];
                $nmj_tanggal= date('Y-m-d', strtotime($nmj_tanggal));
                $mat_isn= $_POST['mat_isn'];
                $mat_ipn= $_POST['mat_ipn'];
                $mat_tanggal= $_POST['mat_tanggal'];
                $mat_tanggal= date('Y-m-d', strtotime($mat_tanggal));
                $nat_isn= $_POST['nat_isn'];
                $nat_ipn= $_POST['nat_ipn'];
                $nat_tanggal= $_POST['nat_tanggal'];
                $nat_tanggal= date('Y-m-d', strtotime($nat_tanggal));
                $tpg_isn= $_POST['tpg_isn'];
                $tpg_ipn= $_POST['tpg_ipn'];
                $tpg_tanggal= $_POST['tpg_tanggal'];
                $tpg_tanggal= date('Y-m-d', strtotime($tpg_tanggal));
                $css_isn= $_POST['css_isn'];
                $css_ipn= $_POST['css_ipn'];
                $css_pcs= $_POST['css_pcs'];

                $sql="INSERT INTO flykitstatus (mw_isn, mw_ipn, mw_tanggal, nw_isn, nw_ipn, nw_tanggal, mtw_isn, mtw_ipn, mtw_tanggal
                , ntw_isn, ntw_ipn, ntw_tanggal, nmj_isn, nmj_ipn, nmj_tanggal, mat_isn, mat_ipn, mat_tanggal
                , nat_isn, nat_ipn, nat_tanggal, tpg_isn, tpg_ipn, tpg_tanggal, css_isn, css_ipn, css_pcs)
                VALUES ('$mw_isn', '$mw_ipn', '$mw_tanggal', '$nw_isn', '$nw_ipn', '$nw_tanggal', '$mtw_isn', '$mtw_ipn', '$mtw_tanggal'
                , '$ntw_isn', '$ntw_ipn', '$ntw_tanggal', '$nmj_isn', '$nmj_ipn', '$nmj_tanggal', '$mat_isn', '$mat_ipn', '$mat_tanggal'
                , '$nat_isn', '$nat_ipn', '$nat_tanggal', '$tpg_isn', '$tpg_ipn', '$tpg_tanggal', '$css_isn', '$css_ipn', '$css_pcs')";
                mysqli_query($conn, $sql);

                //UPDATE
                //PROFILE

                $sql = "UPDATE tampung_all, profile SET tampung_all.tanggal = profile.tanggal WHERE tampung_all.id = profile.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, profile SET tampung_all.ar = profile.ar2 WHERE tampung_all.id = profile.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, profile SET tampung_all.ar2 = profile.ar2 WHERE tampung_all.id = profile.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, profile SET tampung_all.mechanic = profile.mechanic WHERE tampung_all.id = profile.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, profile SET tampung_all.pesawat = profile.pesawat WHERE tampung_all.id = profile.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, profile SET tampung_all.kode = profile.kode WHERE tampung_all.id = profile.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, profile SET tampung_all.mt = profile.mt WHERE tampung_all.id = profile.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, profile SET tampung_all.station = profile.station WHERE tampung_all.id = profile.id";
                mysqli_query($conn, $sql);

                //ACTIVITY_AR

                $sql = "UPDATE tampung_all, activity_ar SET tampung_all.seq_ar = activity_ar.seq_ar WHERE tampung_all.id = activity_ar.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_ar SET tampung_all.dess_ar = activity_ar.dess_ar WHERE tampung_all.id = activity_ar.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_ar SET tampung_all.pno_ar = activity_ar.pno_ar WHERE tampung_all.id = activity_ar.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_ar SET tampung_all.sno_ar = activity_ar.sno_ar WHERE tampung_all.id = activity_ar.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_ar SET tampung_all.pni_ar = activity_ar.pni_ar WHERE tampung_all.id = activity_ar.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_ar SET tampung_all.sni_ar = activity_ar.sni_ar WHERE tampung_all.id = activity_ar.id";
                mysqli_query($conn, $sql);

                //ACTIVITY_LOGBOOK

                $sql = "UPDATE tampung_all, activity_logbook SET tampung_all.seq_logbook = activity_logbook.seq_logbook WHERE tampung_all.id = activity_logbook.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_logbook SET tampung_all.dess_logbook = activity_logbook.dess_logbook WHERE tampung_all.id = activity_logbook.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_logbook SET tampung_all.pno_logbook = activity_logbook.pno_logbook WHERE tampung_all.id = activity_logbook.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_logbook SET tampung_all.sno_logbook = activity_logbook.sno_logbook WHERE tampung_all.id = activity_logbook.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_logbook SET tampung_all.pni_logbook = activity_logbook.pni_logbook WHERE tampung_all.id = activity_logbook.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_logbook SET tampung_all.sni_logbook = activity_logbook.sni_logbook WHERE tampung_all.id = activity_logbook.id";
                mysqli_query($conn, $sql);

                //ACTIVITY_ADDJOB

                $sql = "UPDATE tampung_all, activity_addjob SET tampung_all.seq_addjob = activity_addjob.seq_addjob WHERE tampung_all.id = activity_addjob.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_addjob SET tampung_all.dess_addjob = activity_addjob.dess_addjob WHERE tampung_all.id = activity_addjob.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_addjob SET tampung_all.pno_addjob = activity_addjob.pno_addjob WHERE tampung_all.id = activity_addjob.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_addjob SET tampung_all.sno_addjob = activity_addjob.sno_addjob WHERE tampung_all.id = activity_addjob.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_addjob SET tampung_all.pni_addjob = activity_addjob.pni_addjob WHERE tampung_all.id = activity_addjob.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_addjob SET tampung_all.sni_addjob = activity_addjob.sni_addjob WHERE tampung_all.id = activity_addjob.id";
                mysqli_query($conn, $sql);

                //ACTIVITY_MSAO

                $sql = "UPDATE tampung_all, activity_msao SET tampung_all.seq_msao = activity_msao.seq_msao WHERE tampung_all.id = activity_msao.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_msao SET tampung_all.dess_msao = activity_msao.dess_msao WHERE tampung_all.id = activity_msao.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_msao SET tampung_all.pno_msao = activity_msao.pno_msao WHERE tampung_all.id = activity_msao.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_msao SET tampung_all.sno_msao = activity_msao.sno_msao WHERE tampung_all.id = activity_msao.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_msao SET tampung_all.pni_msao = activity_msao.pni_msao WHERE tampung_all.id = activity_msao.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_msao SET tampung_all.sni_msao = activity_msao.sni_msao WHERE tampung_all.id = activity_msao.id";
                mysqli_query($conn, $sql);

                //ACTIVITY_AML

                $sql = "UPDATE tampung_all, activity_aml SET tampung_all.seq_aml = activity_aml.seq_aml WHERE tampung_all.id = activity_aml.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_aml SET tampung_all.dess_aml = activity_aml.dess_aml WHERE tampung_all.id = activity_aml.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_aml SET tampung_all.hil_aml = activity_aml.hil_aml WHERE tampung_all.id = activity_aml.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, activity_aml SET tampung_all.cat_aml = activity_aml.cat_aml WHERE tampung_all.id = activity_aml.id";
                mysqli_query($conn, $sql);


                //TIRE_PRESSURE

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.due_dates = tire_pressure.due_dates WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.lmw_bi = tire_pressure.lmw_bi WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.lmw_bi_rl = tire_pressure.lmw_bi_rl WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.lmw_bii = tire_pressure.lmw_bii WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.lmw_bii_rl = tire_pressure.lmw_bii_rl WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.rmw_biii = tire_pressure.rmw_biii WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.rmw_biii_rl = tire_pressure.rmw_biii_rl WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.rmw_biv = tire_pressure.rmw_biv WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.rmw_biv_rl = tire_pressure.rmw_biv_rl WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.lmw_ai = tire_pressure.lmw_ai WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.lmw_aii = tire_pressure.lmw_aii WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.rmw_aiii = tire_pressure.rmw_aiii WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.rmw_aiv = tire_pressure.rmw_aiv WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.nw_bi = tire_pressure.nw_bi WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.nw_bii = tire_pressure.nw_bii WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.nw_ai = tire_pressure.nw_ai WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, tire_pressure SET tampung_all.nw_aii = tire_pressure.nw_aii WHERE tampung_all.id = tire_pressure.id";
                mysqli_query($conn, $sql);

                //airframe

                $sql = "UPDATE tampung_all, airframe SET tampung_all.seo_one = airframe.seo_one WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, airframe SET tampung_all.seo_two = airframe.seo_two WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, airframe SET tampung_all.bwpb_one = airframe.bwpb_one WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, airframe SET tampung_all.bwpa_one = airframe.bwpa_one WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, airframe SET tampung_all.bwpb_two = airframe.bwpb_two WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, airframe SET tampung_all.bwpa_two = airframe.bwpa_two WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, airframe SET tampung_all.hydra = airframe.hydra WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, airframe SET tampung_all.head = airframe.head WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, airframe SET tampung_all.fob = airframe.fob WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, airframe SET tampung_all.cop = airframe.cop WHERE tampung_all.id = airframe.id";
                mysqli_query($conn, $sql);

                //avionic

                $sql = "UPDATE tampung_all, avionic SET tampung_all.head = avionic.head WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, avionic SET tampung_all.b_head = avionic.b_hode WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, avionic SET tampung_all.mbv = avionic.mbv WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, avionic SET tampung_all.ebv = avionic.ebv WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, avionic SET tampung_all.pec = avionic.pec WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, avionic SET tampung_all.txtpec = avionic.txtpec WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, avionic SET tampung_all.eec = avionic.eec WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, avionic SET tampung_all.txteec = avionic.txteec WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, avionic SET tampung_all.mfc = avionic.mfc WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, avionic SET tampung_all.txtmfc = avionic.txtmfc WHERE tampung_all.id = avionic.id";
                mysqli_query($conn, $sql);

                //CERTIFICATE

                $sql = "UPDATE tampung_all, certificate SET tampung_all.cor = certificate.cor WHERE tampung_all.id = certificate.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, certificate SET tampung_all.coa = certificate.coa WHERE tampung_all.id = certificate.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, certificate SET tampung_all.aasl = certificate.aasl WHERE tampung_all.id = certificate.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, certificate SET tampung_all.ci = certificate.ci WHERE tampung_all.id = certificate.id";
                mysqli_query($conn, $sql);

                //CABIN_PROBLEM

                $sql = "UPDATE tampung_all, cabin_problem SET tampung_all.hil = cabin_problem.hil WHERE tampung_all.id = cabin_problem.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_problem SET tampung_all.exp_cml = cabin_problem.exp_cml WHERE tampung_all.id = cabin_problem.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_problem SET tampung_all.cat = cabin_problem.cat WHERE tampung_all.id = cabin_problem.id";
                mysqli_query($conn, $sql);

                //CABIN_TOOLS

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.lavatory = cabin_tools.lavatory WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.txtlavatory = cabin_tools.txtlavatory WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.carpet_co = cabin_tools.carpet_co WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.txtcarpet_co = cabin_tools.txtcarpet_co WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.scc = cabin_tools.scc WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.txtscc = cabin_tools.txtscc WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.cabin_cl = cabin_tools.cabin_cl WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.txtcabin_cl = cabin_tools.txtcabin_cl WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.ea = cabin_tools.ea WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.txtea = cabin_tools.txtea WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.ee = cabin_tools.ee WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, cabin_tools SET tampung_all.txtee = cabin_tools.txtee WHERE tampung_all.id = cabin_tools.id";
                mysqli_query($conn, $sql);

                //FLYKIT

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.mw_isn = flykitstatus.mw_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.mw_ipn = flykitstatus.mw_ipn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.mw_tanggal = flykitstatus.mw_tanggal WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.nw_isn = flykitstatus.nw_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.nw_ipn = flykitstatus.nw_ipn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.nw_tanggal = flykitstatus.nw_tanggal WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.mtw_isn = flykitstatus.mtw_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.mtw_ipn = flykitstatus.mtw_ipn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.mtw_tanggal = flykitstatus.mtw_tanggal WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.ntw_isn = flykitstatus.ntw_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.ntw_ipn = flykitstatus.ntw_ipn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.ntw_tanggal = flykitstatus.ntw_tanggal WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.nmj_isn = flykitstatus.nmj_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.nmj_ipn = flykitstatus.nmj_ipn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.nmj_tanggal = flykitstatus.nmj_tanggal WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.mat_isn = flykitstatus.mat_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.mat_ipn = flykitstatus.mat_ipn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.mat_tanggal = flykitstatus.mat_tanggal WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.nat_isn = flykitstatus.nat_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.nat_ipn = flykitstatus.nat_ipn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.nat_tanggal = flykitstatus.nat_tanggal WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.tpg_isn = flykitstatus.tpg_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.tpg_ipn = flykitstatus.tpg_ipn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.tpg_tanggal = flykitstatus.tpg_tanggal WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.css_isn = flykitstatus.css_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.css_ipn = flykitstatus.css_isn WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, flykitstatus SET tampung_all.css_pcs = flykitstatus.css_pcs WHERE tampung_all.id = flykitstatus.id";
                mysqli_query($conn, $sql);

                
                ?>