import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from "@angular/forms";
import {DateAdapter} from "@angular/material/core";
import {
  faCalendarAlt,
  faEnvelope,
  faEyeSlash,
  faFemale,
  faLocationArrow,
  faMale,
  faPhone
} from '@fortawesome/free-solid-svg-icons';

export const MOBILE_PATTERN = /[0-9\+\-\ ]/;
export const PASSWORD_PATTERN = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

@Component({
  selector: 'app-seller-account',
  templateUrl: './seller-account.component.html',
  styleUrls: ['./seller-account.component.scss'],
})
export class SellerAccountComponent implements OnInit {

  minDate: Date;
  maxDate: Date = new Date();
  sellerForm: FormGroup;



  constructor(
    private fb: FormBuilder,
    private dateAdapter: DateAdapter<Date>
  ) {
    this.dateAdapter.setLocale('fr');
    const currentYear = new Date().getFullYear();
    this.minDate = new Date(currentYear - 100, 0, 1);

    this.sellerForm = this.fb.group({
      sex: [],
      firstName: [],
      lastName: [],
      birthDate: [],
      siren: [],
      address: [],
      telephone: ['', [Validators.pattern(MOBILE_PATTERN)]],
      email: [],
      password: ['', [Validators.pattern(PASSWORD_PATTERN)]],
      passwordConfirm: ['', [Validators.pattern(PASSWORD_PATTERN)]],
      autoEntrepreneur: [true],
      generalConditions: [false],
    });
  }

  ngOnInit(): void {
  }

  faEyeSlash = faEyeSlash;
  faEnvelope = faEnvelope;
  faPhone = faPhone;
  faLocationArrow = faLocationArrow;
  faMale = faMale;
  faFemale = faFemale;
  faCalendarAlt = faCalendarAlt;

}
