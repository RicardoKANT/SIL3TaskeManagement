@extends('layouts.app')


<div class="content-wrapper">



<form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nom de la tache">
          <div class="input-group-append">
            <div class="input-group-text">
             <!-- <span class="fas fa-user"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
           <textarea class="form-control" placeholder="Description" rows="6"></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
             <!-- <span class="fas fa-envelope"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Delai">
          <div class="input-group-append">
            <div class="input-group-text">
             <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" placeholder="Creer le">
          <div class="input-group-append">
            <div class="input-group-text">
             <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
         
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-12 text-center">
            <button type="submit" style="text-align:center"class="btn btn-primary btn-block">Register</button>
          </div>
				
        </div>
      </form>






  </div>