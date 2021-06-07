import {Component, OnInit} from '@angular/core';
import {ActivatedRoute, Router} from '@angular/router';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';
import {first} from 'rxjs/operators';
import {AuthenticationService} from "../../services/authentication.service";
import {faEnvelope, faEyeSlash} from '@fortawesome/free-solid-svg-icons';
import {timer} from 'rxjs';

export const minute = 60 * 1000; // in ms

@Component({ templateUrl: 'login.component.html' })
export class LoginComponent implements OnInit {
  loginForm: FormGroup;
  loading = false;
  submitted = false;
  returnUrl: string;
  error = '';

  constructor(
    private formBuilder: FormBuilder,
    private route: ActivatedRoute,
    private router: Router,
    private authenticationService: AuthenticationService,
  ) {
    // redirect to home if already logged in
    if (this.authenticationService.userValue) {
      this.router.navigate(['/']);
    }
  }

  ngOnInit() {
    this.loginForm = this.formBuilder.group({
      email: ['', Validators.required],
      password: ['', Validators.required],
      rememberMe: [false],
    });

    // get return url from route parameters or default to '/'
    this.returnUrl = this.route.snapshot.queryParams['returnUrl'] || '/';
  }

  // convenience getter for easy access to form fields
  get loginControls() { return this.loginForm.controls; }

  onSubmit() {
    this.submitted = true;

    // stop here if form is invalid
    if (this.loginForm.invalid)
      return;

    this.loading = true;
    console.log([this.loginControls.email.value, this.loginControls.password.value])
    this.authenticationService.login(this.loginControls.email.value, this.loginControls.password.value)
      .pipe(first())
      .subscribe(
        data => {
          this.router.navigate([this.returnUrl]);

          if( !this.loginControls.rememberMe.value )
            timer( 30 * minute ).subscribe(() =>this.authenticationService.logout())
        },
        error => {
          this.error = error;
          this.loading = false;
        });

  }

  faEnvelope = faEnvelope;
  faEyeSlash = faEyeSlash;
}
