 <!-- sondage -->
 <form method="POST">
     <div class="container-fluid">
         <h3 class="mt-5 ml-5">Inscris Toi ?</h3>
         <div class="row">
             <div class="col-6">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <div class="container">
                                 <div class="row">
                                     <div class="col-12">
                                         <p class="mt-2">Ton Adresse Mail</p>
                                         <input type="text" class="p-3  input-inscript" size="40" placeholder="Adresse Mail">
                                         <p class="mt-2">Ton Mot de passe</p>
                                         <input type="text" class="p-3  input-inscript" size="40" placeholder="Mot De Passe">
                                         <p class="mt-2">Retape le on sait jamais !</p>
                                         <input type="text" class="p-3  input-inscript" size="40" 
                                             placeholder="Retape le on sait jamais !">
                                     </div>
                                 </div>
                             </div>
                             <div class="container mt-4">
                                 <div class="row">
                                     <div class="col-12">
                                         <input type="radio" class="p-3" id="male" name="gender" value="male">
                                         <label for="male">Homme</label><br>
                                         <input type="radio" class="p-3" id="female" name="gender" value="female">
                                         <label for="female">Femme</label><br>
                                         <input type="radio" class="p-3" id="other" name="gender" value="other">
                                         <label for="other">Autre</label>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-6">
                 <input type="text" class="p-3 mt-5 input-inscript" size="40" placeholder="Ton Pseudo">
                 <h3 class="mt-5">Ton Anniversaire</h3>
                 <input type="text" class="p-3 mt-2 input-inscript" size="40" placeholder="Date/Mois/Année">
                 <input type="submit" class="mt-5 button-speak p-3" value="Creer son compte">
             </div>

         </div>
     </div>
 </form>