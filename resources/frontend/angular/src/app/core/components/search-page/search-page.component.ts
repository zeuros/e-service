import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';
import {Observable, of} from 'rxjs';
import {User} from '../../../shared/model/user';
import {CityService} from '../../services/city.service';

// @TODO: move to classes place
export class City {
  name: string;
  postCode: number;
}

@Component({
  selector: 'app-home',
  templateUrl: './search-page.component.html',
  styleUrls: ['./search-page.component.scss'],
})
export class SearchPageComponent implements OnInit {
  prestations = new FormControl();
  stateGroup = new FormControl();
  appointmentDate = new FormControl();

  findAServiceForm: FormGroup;
  cities: City[] = [];

  constructor(
    private cityService: CityService,
    private fb: FormBuilder,
  ) {

    this.cityService.cities$.subscribe(cities =>
      this.cities = cities);

    this.stateGroup.valueChanges.subscribe(v =>
      cityService.refreshCities(v).subscribe(cities =>
        this.cities = cities));

    this.findAServiceForm = this.fb.group({});

  }

  ngOnInit() {
  }

  datePickerFilter = (d: Date | null): boolean => {
    const day = (d || new Date()).getDay();
    // Prevent Saturday and Sunday from being selected.
    return ![0, 6].includes(day);
  }

  showCity = (city: City): string =>
    city ? city.name + (city.postCode ? ' (' + city.postCode + ')' : '') : ''

  get users(): Observable<User[]> {
    return of([{
      id: 1,
      name: 'toto',
      mail: 'toto@free.fr',
    }, {
      id: 2,
      name: 'titi',
      mail: 'titi@free.fr',
    }]);
  }

}
