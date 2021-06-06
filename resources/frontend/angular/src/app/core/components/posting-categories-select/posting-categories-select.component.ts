import {Component, Input, OnInit} from '@angular/core';
import {FormControl} from '@angular/forms';
import {ConfigurationService} from '../../services/configuration.service';

@Component({
  selector: 'app-posting-categories-select',
  templateUrl: './posting-categories-select.component.html',
  styleUrls: ['./posting-categories-select.component.scss'],
})
export class PostingCategoriesSelectComponent implements OnInit {
  @Input()
  prestations: FormControl;

  prestationList: string[] = [];

  constructor(
    private configurationService: ConfigurationService,
  ) {
    this.configurationService.configuration$.subscribe(conf =>
      this.prestationList = conf.prestationList);
  }

  ngOnInit(): void {
  }

}
