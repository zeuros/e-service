import { Component, OnInit } from '@angular/core';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';

@Component({
  selector: 'app-new-posting-page',
  templateUrl: './new-posting-page.component.html',
  styleUrls: ['./new-posting-page.component.scss']
})
export class NewPostingPageComponent implements OnInit {
  postingTitle = new FormControl();
  prestations = new FormControl();


  newPostPage: FormGroup;

  constructor(
    private fb: FormBuilder,
  ) {
    this.newPostPage = this.fb.group({});
  }

  ngOnInit(): void {
  }

}
