<?php
session_start();

// Template Name: schedule of loss
  if(isset($_POST['working'])) {
    
    unset($_POST['working']);
    $_SESSION['soldata'] = $_POST;
    
  }
 ?>


<?php get_header(); ?>
<body>
    <div class="container">
      <div class="inner-heading">
        <h3><?php the_title();?></h3>
      </div>
	<form  action="<?php the_permalink(1399); ?>" method="POST" class="formToValidate">
		<div class="form-group" style="text-align: center;">
			<label class="sol-label">In the Employment Tribunal</label>
			<input type="text" name="emp_tri">
		</div>
		
		<div class="form-group" style="text-align: right;">
			<label class="sol-label">Case No:</label>
			<input type="text" name="caseno" id="caseno">
		</div>

		<div class="form-group">
			<label class="sol-label bet">Between:</label>
			<div style="text-align: center;">
			    <input type="text" name="claimant" id="claimant" placeholder="Claimant"><label class="sol-label Claimant" style="text-align: right">Claimant</label>
			    <label class="sol-label and-block">AND</label>
			    <input type="text" name="Respondent1" id="Respondent1" placeholder="Respondent"><label class="sol-label Claimant" style="text-align: right">Respondent</label><button type="button" class="addmore">Add More</button>
          <input type="text" name="Respondent2" id="Respondent2" placeholder="Respondent" class="r2" style="display: none;"><button type="button" class="rem" style="display: none;" >Remove</button>
			</div>
		</div>
		<div class="form-group" style="text-align: center;">
			<label class="sol-label">Claimant's schedule of loss as at </label><input type="text" name="solat" class="solat">
		</div>
		<div class="overview-block">
		<h2> 1. OVERVIEW</h2>
		
		

		<div class="form-group">
			<label class="sol-label">Date of Birth </label><input type="date" name="dob" class="dob">
		</div>

		<div class="form-group">
			<label class="sol-label">Date of Termination </label><input type="date" name="dot" class="dot">
		</div>

		<div class="form-group">
			<label class="sol-label">Age of Termination </label><input type="number" name="agt" class="agt">
		</div>

		<div class="form-group">
			<label class="sol-label pos">Period of Service:  </label><label class="sol-label sub-cat-pp">From</label><input type="date" name="posfrom" class="posfrom"><label class="sol-label sub-cat-pp">to</label><input type="date" name="posto" class="posto">
		</div>

		<div class="form-group">
			<label class="sol-label">Years of Continuous Service </label><input type="number" name="yocs" class="yocs"><label class="sol-label">years</label>
		</div>
		<div class="form-group">
			<label class="sol-label">Average net weekly pay  </label><input type="text" name="anwp" class="anwp">
		</div>

		<div class="form-group">
			<label class="sol-label">Gross weekly pay</label><input type="text" name="anwp" class="anwp">
		</div>

		<div class="form-group">
			<label class="sol-label">Your employer’s annual pension contributions/annual pension benefit:</label><input type="text" name="pension" class="pension" placeholder="Insert Amount">
		</div>

		<div class="form-group">
			<label class="sol-label">Annual value of bonus/other employment benefits:</label><input type="text" name="bonus" class="bonus" placeholder="Insert Amount" >
		</div>

		<div class="form-group">
			<label class="sol-label">Contractual Notice</label><input type="number" name="cn" class="cn">
      <select name ="dropdown" id="Contractualnoticse">
				<option class="week">Weeks</option>
				<option class="mnth" >Months</option>
			</select>
		</div>

		<div class="form-group">
			<label class="sol-label">Statutory Notice</label><input type="number" name="sn" class="sn"><select id="Statutorynotice" name ="dropdown1" > 
				<option class="weeks">Weeks</option>
				<option class="mnths" >Months</option>
			</select>
		</div>

		<div class="form-group">
			<label class="sol-label">Earnings from new job from</label><input type="date" name="newjob" class="newjob">
		</div>
		</div>
		<div class="compensationn">
			<h2>2. Compensation</h2>
		<label class="sol-label" style="text-align:center;display:block">2.1 PECUNIARY LOSSES</label><br>
		<label class="sol-label">DISCRIMINATION BY DISMISSAL</label><br>
		<label class="sol-label">2.1.1    Loss to date of 
             tribunal hearing</label>

         <div class="form-group">
         	<label class="sol-label">Loss of basic salary to date of tribunal ([insert number of weeks from effective date of termination] X £ [insert net weekly basic pay]):£</label><input type="text" name="lobsdot" class="a" id="lobsdot">
         </div> 

         <div class="form-group">
         	<label class="sol-label">Loss of [enter details, e.g. bonus/commission]to date of tribunal:£</label><input type="text" name="lodot" class="a" id="lodot">
         </div>

          <div class="form-group">
         	<label class="sol-label">Loss of pension benefit to date of tribunal: [specify details, e.g. number of weeks at £x per week or an explanation of how a more complex pension loss calculation has been carried out]:£</label><input type="text" name="lopb" class="a" id="lopb">
         </div>


          <div class="form-group">
         	<label class="sol-label">Loss of [insert details of other benefits] to date of tribunal:£</label><input type="text" name="loidot" class="a" id="loidot">
          </div>

          <div class="form-group">
         	<label class="sol-label">Expenses incurred to date of tribunal:£</label><input type="text" name="eidot" class="a" id="eidot">
          </div>

          <label class="sol-label total-lost">Losses to date of tribunal (past loss):</label><label id="asum" class="asum"></label><br>
          <label class="sol-label">LESS</label>

          <div class="form-group">
          	<label class="sol-label">State benefits received due to prohibited act: [insert details of benefits, e.g. JSA at £x for x weeks]</label><input type="text" name="sbrd" id="sbrd" class="b">
          </div>

           <div class="form-group">
          	<label class="sol-label">Sums received from the Respondent: [set out relevant details of any payments received from the respondent, e.g. an ex gratia payment of £x or a payment in lieu of notice of £x]]</label><input type="text" name="srfr" id="srfr" class="b">
          </div> 

          <div class="form-group">
          	<label class="sol-label">Sums obtained through mitigation to date of tribunal: [set out relevant details of each job that employee has had, e.g. two weeks' temporary shop work [insert dates] at £200 net per week: £400, three weeks' part-time work at estate agency [insert dates] at £50 net per week: £150,etc.]</label><input type="text" name="sotm" id="sotm" class="b">
          </div>

          <label class="sol-label total-lost">Total past loss:</label><label class="sol-label" id="asn1" class="asn1"></label><br>


          <label class="sol-label">2.1.2 FUTURE LOSS</label>

          <div class="form-group">
          	<label class="sol-label">Future loss of earnings ([insert period] X £ [insert net weekly basic pay]):</label><input type="text" name="floe" class="c" id="floe">
          </div>

          <div class="form-group">
          	<label class="sol-label">Future loss of pension: [specify details, e.g. number of weeks at £x per week or an explanation of how a more complex pension loss calculation has been carried out.]</label><input type="text" name="flop" class="c" id="flop">
          </div>


          <div class="form-group">
          	<label class="sol-label">Future loss of [insert details of other benefits]: [insert details, i.e. number of weeks at £x per week]</label><input type="text" name="flo" class="c" id="flo">
          </div>


          <div class="form-group">
          	<label class="sol-label">Future expenses: [insert details]</label><input type="text" name="fe" class="c" id="fe">
          </div>

         <label class="sol-label total-lost">Future losses:</label> <b><label class="sol-label" id="asn2" class="asn2"></label></b>

         <br>
         <label class="sol-label">LESS</label>


         <div class="form-group">
         	<label class="sol-label">Future mitigation: [insert details and net pay of any new job. If work is only temporary, give details, including end date]</label><input type="text" name="fm" id="fm" class="d">

         </div>

         <label class="sol-label total-lost">Total future loss:</label><label class="sol-label" id="ans3" class="ans3"></label>
         <br>
         <label class="sol-label">DISCRIMINATION BY NON-PROMOTION</label>

         <br>
         <label class="sol-label">2.1.3 Loss to date of tribunal hearing</label>

         <div class="form-group">
         	<label class="sol-label">Loss of basic salary to date of tribunal ([insert number of weeks from effective date of termination] X £[insert net weekly basic pay ]):</label><input type="text" name="lobs" class="e" id="lobs">
         </div>

         <div class="form-group">
         	<label class="sol-label">Loss of [enter details, e.g. bonus/commission] to date of tribunal:</label><input type="text" name="lobc" class="e" id="lobc">
         </div>  
         <div class="form-group">
         	<label class="sol-label">Loss of pension benefit to date of tribunal: [specify details, e.g. number of weeks at £x per week or an explanation of how a more complex pension loss calculation has been carried out]</label><input type="text" name="lopbdot" class="e" id="lopbdot">
         </div>

         <div class="form-group">
         	<label class="sol-label">Loss of [insert details of other benefits] to date of tribunal: [insert details, i.e. number of weeks at £x per week]</label><input type="text" name="lodobdot" class="e" id="lodobdot">
         </div>

         <label class="sol-label total-lost">Losses to date of tribunal (past loss):</label><b><label class="sol-label" id="ans4" class="ans4"></label></b>
         <br>
         <label class="sol-label">LESS</label>

         <div class="form-group">
         	<label class="sol-label">Sums earned in existing role £[insert total amount earned in existing role to date of tribunal]:</label><input type="text" name="seer"  id="seer" class="f">
         	
         </div>

         <div class="form-group">
         	<label class="sol-label">[Enter details, e.g. bonus/commission] earned in existing role:</label><input type="text" name="eer"  id="eer" class="f">
         </div>

         <div class="form-group">
         	<label class="sol-label">Pension benefit earned in existing role:</label><input type="text" name="pbeer"  id="pbeer" class="f">
         </div>
         <div class="form-group">
         	<label class="sol-label">[insert details of other benefits] in existing role: [insert details, i.e. number of weeks at £x per week]</label><input type="text" name="erid"  id="erid" class="f">
         </div>

         <label class="sol-label total-lost">Total past loss:</label><label class="sol-label" id="ans6" class="ans6"></label>

         <br>
         <label class="sol-label">2.1.4 FUTURE LOSS</label>

         <div class="form-group">
         	<label class="sol-label">Future loss of earnings ([insert period] X £[insert net weekly basic pay]):</label><input type="text" name="floe" id="floe" class="g">
         </div>

         <div class="form-group">
         	<label class="sol-label">Future loss of pension: [specify details, e.g. number of weeks at £x per week or an explanation of how a more complex pension loss calculation has been carried out]</label><input type="text" name="flop" id="flop" class="g">
         </div>

          <div class="form-group">
         	<label class="sol-label">Future loss of [insert details of other benefits]: [insert details, i.e. number of weeks at £x per week]</label><input type="text" name="floob" id="floob" class="g">
         </div>

         <div class="form-group">
         	<label class="sol-label">Future expenses: [insert details]</label><input type="text" name="feid" id="feid" class="g">
         </div>

         <label class="sol-label total-lost">Future losses:</label><b><label class="sol-label" id="asn7" class="asn7"></label></b><br>

         <label class="sol-label">LESS</label>

         <div class="form-group">
         	<label class="sol-label">Future sums earned in existing role: [insert details, e.g. period of future loss claimed X net pay of existing role]</label><input type="text" name="fseer" id="fseer" class="h">
         </div>

         <div class="form-group">
         	<label class="sol-label">Future [enter details, e.g. bonus/commission] in existing role: [insert details]</label><input type="text" name="fbceer" id="fbceer" class="h">
         </div>

          <div class="form-group">
         	<label class="sol-label">Future pension benefit in existing role [insert details]</label><input type="text" name="fpber" id="fpber" class="h">
         </div>

         <div class="form-group">
         	<label class="sol-label">Future [insert details of other benefits] in existing role:</label><input type="text" name="fer" id="fer" class="h">
         </div>

         <label class="sol-label total-lost">Total future loss:</label> <b><label class="sol-label" id="ans8" class="ans8"></label></b>
         <br>
         <label class="sol-label">DISCRIMINATION BY NON-APPOINTMENT</label><br>
         <label class="sol-label">2.1.5  Loss to date of tribunal hearing</label>

         <div class="form-group">
         	<label class="sol-label">Loss of basic salary to date of tribunal: ([insert number of weeks from effective date of termination] X £[insert net weekly basic pay])</label><input type="text" name="lbsdot"
         	id="lbsdot" class="i">
         	
         </div> 

         <div class="form-group">
         	<label class="sol-label">Loss of [enter details, e.g. bonus/commission] to date of tribunal:</label><input type="text" name="locdot"
         	id="locdot" class="i">
         	
         </div>

         <div class="form-group">
         	<label class="sol-label">Loss of pension benefit to date of tribunal: [specify details, e.g. number of weeks at £x per week or an explanation of how a more complex pension loss calculation has been carried out]</label><input type="text" name="lopbdotn" id="lopbdotn" 
         class="i">
         	
         </div>

          <div class="form-group">
         	<label class="sol-label">Loss of [insert details of other benefits] to date of tribunal:</label><input type="text" name="lodotob" id="lodotob" 
         class="i">
         	
         </div>

         <div class="form-group">
         	<label class="sol-label">Expenses incurred to date of hearing: [insert details]</label><input type="text" name="eidoh" id="eidoh" 
         class="i">
         	
         </div>

         <label class="sol-label total-lost">Losses to date of tribunal (past loss):</label><b><label class="sol-label" id="ans10" class="ans10"></label></b>
         <br>
         <label class="sol-label">LESS</label><br>

         <div class="form-group">
         	<label class="sol-label">State benefits received due to prohibited act: [insert details of benefits, e.g. JSA at £x for x weeks]</label><input type="text" name="sbrdpa" id="sbrdpa" class="j">
         </div>

          <div class="form-group">
         	<label class="sol-label">Sums obtained through mitigation to date of tribunal: [set out relevant details of each job that employee has had, e.g. two weeks' temporary shop work [insert dates] at £200 net per week: £400, three weeks' part-time work at estate agency [insert dates] at £50 net per week: £150, etc.]</label><input type="text" name="sotm" id="sotm" class="j">
         </div>

         <label class="sol-label total-lost">Total past loss:</label><b><label class="sol-label" id="ans11" class="ans11"></label></b><br>

         <label class="sol-label">2.1.6 FUTURE LOSS</label>

         <div class="form-group">
         	<label class="sol-label">Future loss of earnings ([insert period] X £[insert net weekly basic pay]):</label><input type="text" name="floe" id="floe" class="k">
         </div>

         <div class="form-group">
         	<label class="sol-label">Future loss of pension: [specify details, e.g. number of weeks at £x per week or an explanation of how a more complex pension loss calculation has been carried out]</label><input type="text" name="flopp" id="flopp" class="k">
         </div>

         <div class="form-group">
         	<label class="sol-label">Future loss of [insert details of other benefits]: [insert details, i.e. number of weeks at £x per week]</label><input type="text" name="flob" id="flob" class="k">
         </div> 

         <div class="form-group">
         	<label class="sol-label">Future expenses: [insert details]</label><input type="text" name="=fee" id="fee" class="k">
         </div>

         <label class="sol-label total-lost">Future losses:</label><b> <label class="sol-label" id="ans12" class="ans12" ></label></b><br>
         <label class="sol-label" style="width:400px;text-align:center">LESS</label>

         <div class="form-group">
         	<label class="sol-label">Future mitigation: [insert details and net pay of any new job. If work is only temporary, give details, including end date]</label><input type="text" name="fmm" id="fmm" class="l">
         </div>

         <label class="sol-label total-lost">Total future loss:</label><b><label class="sol-label" id="ans13" class="ans13"></label></b>
		</div>
		
		<div class="stigmax">
         <label class="sol-label" style="display:block;text-align:center;width:100%">2.2 STIGMA DAMAGES</label>

         <div class="form-group">
         	<label class="sol-label">[For a detailed schedule, insert an explanation of why stigma damages are claimed and reasons for the suggested amount]</label><input type="text" name="fds" id="fds" class="m">
         </div>

         <label class="sol-label" style="display:block;text-align:center;width:100%">2.3 NON-PECUNIARY LOSSES</label><br>
         <label class="sol-label">Injury to feelings</label><input type="text" name="iof" id="iof" class="m"><br>
         <label class="sol-label">Personal injury</label><input type="text" name="pi" id="pi" class="m"><br>
         <label class="sol-label">Aggravated damages</label><input type="text" name="ad" id="ad" class="m"><br>
         <label class="sol-label">Exemplary damages</label><input type="text" name="ed" id="ed" class="m"><br>
         
         <label class="sol-label">2.4 Total before uplift, interest and grossing up</label><label class="sol-label" id="ans14" class="ans14"></label><br>
         <label class="sol-label">2.5 UPLIFT ON COMPENSATION FOR FAILURE TO COMPLY WITH THE ACAS CODE</label>
         <b>
			 <label class="sol-label" id="ans15" class="ans15"></label></b><br>
         <label class="sol-label">2.6 INTEREST</label><input type="text" name="inter" id="inter" class="o">
        
      <label class="sol-label">2.7 Grossing up at 40% for effect of taxation: </label><input type="text" name="gut40" id="gut40" class="p">
    


      <label class="sol-label">2.7A Grossing up at 20% for effect of taxation: </label><input type="text" name="gut20" id="gut20" class="q">
  

 
      <label class="sol-label">TOTAL AWARD </label><input type="text" name="tw" id="tw" class="r">
   

         </div>
	
       <!--   <label class="sol-label">2.6 INTEREST</label>
           <div class="form-group">
         	<label class="sol-label">[Insert details of interest calculation]</label><input type="text" name="idc" class="14" id="idc">
         </div>
 -->

	 <!-- <input type="button" name="btn" value="Preview" id="submit" data-toggle="modal" data-target="#confirm-submit" class="btn btn-default" > -->
   <button type="submit" name="working">Submit</button>
  </form>
</div>
</body>

<?php get_footer()?>