import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup} from "@angular/forms";

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
  ) {

    const currentYear = new Date().getFullYear();
    this.minDate = new Date(currentYear - 100, 0, 1);

    this.sellerForm = this.fb.group({
      sex: [],
      firstName: [],
      lastName: [],
      birthDate: [],
    });
  }

  ngOnInit(): void {
  }

}
