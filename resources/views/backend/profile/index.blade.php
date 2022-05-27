@extends('layouts.backend')

@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Profil</h5>

                <a href="{{  route('overwatch') }}" class="float-right">Zurück zu Overwatch</a>
            </div>
            <div class="card-body">
                {!! Form::open(array()) !!}
                {!! csrf_field() !!}

                <form *ngIf="profileForm" [formGroup]="profileForm" (ngSubmit)="editProfile()">
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-12 col-form-label">Vorname</label>
                        <div class="col-md-10 col-12">
                            <input type="text" id="firstname" maxlength="255" class="input-lg form-control" formControlName="firstname" placeholder="Vorname" required="required" />
                        </div>
                    </div>
                    <div
                        *ngIf="profileForm.controls.firstname.invalid && (profileForm.controls.firstname.dirty || profileForm.controls.firstname.touched)"
                        class="alert alert-danger">
                        <div *ngIf="profileForm.controls.firstname.errors.required">
                            Es muss ein Vorname angegeben werden!
                        </div>
                        <div *ngIf="profileForm.controls.firstname.errors.maxlength">
                            Der Vorname darf nicht länger als 255 Zeichen sein!
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-12 col-form-label">Nachmame</label>
                        <div class="col-md-10 col-12">
                            <input type="text" id="lastname" maxlength="255" class="input-lg form-control" formControlName="lastname" placeholder="Nachname" required="required" />
                        </div>
                    </div>
                    <div
                        *ngIf="profileForm.controls.lastname.invalid && (profileForm.controls.lastname.dirty || profileForm.controls.lastname.touched)"
                        class="alert alert-danger">
                        <div *ngIf="profileForm.controls.lastname.errors.required">
                            Es muss ein Nachname angegeben werden!
                        </div>
                        <div *ngIf="profileForm.controls.lastname.errors.maxlength">
                            Der Nachname darf nicht länger als 255 Zeichen sein!
                        </div>
                    </div>

                    <hr />

                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-12 col-form-label">E-Mail</label>
                        <div class="col-md-10 col-12">
                            <input type="text" id="email" maxlength="255" class="input-lg form-control" formControlName="email" placeholder="E-Mail" required="required" />
                        </div>
                    </div>
                    <div
                        *ngIf="profileForm.controls.email.invalid && (profileForm.controls.email.dirty || profileForm.controls.email.touched)"
                        class="alert alert-danger">
                        <div *ngIf="profileForm.controls.email.errors.required">
                            Es muss eine Mail-Adresse angegeben werden!
                        </div>
                        <div *ngIf="profileForm.controls.email.errors.maxlength">
                            Die Mail-Adresse darf nicht länger als 255 Zeichen sein!
                        </div>
                        <div *ngIf="profileForm.controls.email.errors.email">
                            Dies ist keine Mail-Adresse!
                        </div>
                    </div>

                    <hr />

                    <div class="form-group row">
                        <label for="password" class="col-md-2 col-12 col-form-label">Passwort</label>
                        <div class="col-md-10 col-12">
                            <input type="password" id="password" maxlength="255" class="input-lg form-control" formControlName="password" placeholder="Passwort" />
                        </div>
                    </div>
                    <div
                        *ngIf="profileForm.controls.password.invalid && (profileForm.controls.password.dirty || profileForm.controls.password.touched)"
                        class="alert alert-danger">
                        <div *ngIf="profileForm.controls.password.errors.maxlength">
                            Das Passwort darf nicht länger als 255 Zeichen sein!
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password_repeat" class="col-md-2 col-12 col-form-label">Passwort wiederholen</label>
                        <div class="col-md-10 col-12">
                            <input type="password" id="password_repeat" maxlength="255" class="input-lg form-control" formControlName="password_repeat" placeholder="Passwort wiederholen" />
                        </div>
                    </div>
                    <div
                        *ngIf="profileForm.controls.password_repeat.invalid && (profileForm.controls.password_repeat.dirty || profileForm.controls.password_repeat.touched)"
                        class="alert alert-danger">
                        <div *ngIf="profileForm.controls.password_repeat.errors.maxlength">
                            Das Passwort darf nicht länger als 255 Zeichen sein!
                        </div>
                        <div *ngIf="profileForm.controls.password_repeat.errors.confirmedValidator">
                            Passwort wurde nicht korrekt wiederholt!
                        </div>
                    </div>

                    <br/>

                    <button class="btn btn-danger mb-2 float-left col-md-4 col-12" type="button" (click)="cancel()">Abbrechen</button>
                    <button class="btn btn-success mb-2 float-right col-md-4 col-12" type="submit" [disabled]="profileForm.invalid || profileForm.pristine">Profil speichern</button>

                    <div class="clearfix mb-3">&nbsp;</div>
                </form>

            </div>
        </div>
    </div>
@endsection
