import { Component, OnInit } from '@angular/core';
import {FormControl} from '@angular/forms';

@Component({
  selector: 'app-new-posting-page',
  templateUrl: './new-posting-page.component.html',
  styleUrls: ['./new-posting-page.component.scss']
})
export class NewPostingPageComponent implements OnInit {
  postingTitle = new FormControl();
  prestations = new FormControl();

  constructor() { }

  ngOnInit(): void {
  }

}
