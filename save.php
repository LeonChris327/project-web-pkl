                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Perawat</label>
                                <select name="perawat" class="form-control mb-2" style="border-radius:40px">
                                    <option value="art">ART</option>
                                    <option value="nanny">Nanny</option>
                                    <option value="lansia">Perawat Lansia</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control mb-2" style="border-radius:40px">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    

                    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Durasi</label>
                                <select name="durasi" class="form-control mb-2" style="border-radius:40px">
                                    <option value="sebulan">1 Bulan</option>
                                    <option value="2_Bulan">2 Bulan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Lokasi Pasien</label>
                                <select name="lokasi" class="form-control mb-2" style="border-radius:40px">
                                    <option value="Jatim">Jawa Timur</option>
                                    <option value="Jabar">Jawa Barat</option>
                                    <option value="Jateng">Jawa Tengah</option>
                                    <option value="Bali">Bali</option>
                                </select>
                            </div>
                        </div>        
                        
                        
                        <button type="submit" class="text-white text-center btn btn-block" style="background-color: #93C8F0; border-radius:40px"
                    name="submit1">
                        Order
                    </button>

















                    <!-- WHILE -->


            <div class="row text-center">

                    <?php
                   include "connection.php";
                   if(isset($_GET["search"])){
                       $cari = $_GET["search"];
                       $sql = "select * from home 
                       where produk like '%$cari%' 
                       or gender like '%$cari%'
                       or penempatan like '%$cari%'";
                   }else{
                       $sql = "select * from home";
                   }

                   # eksekusi SQL
                   $hasil = mysqli_query($conn, $sql);
                   while ($produk = mysqli_fetch_array($hasil)) {
                       ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="team-box" data-effect="helix">
                                <img class="aligncenter" src="demos/team1.png" alt="">
								<div class="social-icons">
									<span><a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></span>
									<span><a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></span>
									<span><a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></span>
									<span><a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></span>
									<span><a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></span>
									<span><a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Dribbble"><i class="fa fa-dribbble"></i></a></span>
								</div>
                                <h3>ANDREA SMITH</h3>
                                <p>Developer</p>
                            <div class="clearfix"></div>
                           
                    </div> <!-- end teambox -->
                </div> <!-- end column 1 -->
                <?}?>
			
            </div><!-- end row 1 -->