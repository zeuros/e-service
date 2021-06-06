import {Injectable} from '@angular/core';
import {of, Observable, Subject} from 'rxjs';
import {City} from '../components/search-page/search-page.component';

@Injectable({
  providedIn: 'root'
})
export class CityService {
  cities$ = new Subject<City[]>();

  constructor() { }

  refreshCities(search: string): Observable<City[]> {
    const sampleCities = [
      {name: 'Grenoble', postCode: 3800},
      {name: 'Grenoble', postCode: 38100},
      {name: 'Strasbourg', postCode: 3800},
      {name: 'Toulouse', postCode: 31000},
    ].filter((c: City) => search.length > 1 ? c.name.toLowerCase().startsWith(search.toLowerCase()) : false );

    return of(sampleCities);
  }
}
