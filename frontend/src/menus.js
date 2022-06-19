
export const AppMenus = {
    
	navbarTopRightItems: [
  {
    "path": "/countries",
    "label": "Countries",
    "icon": "flag",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/currencies",
    "label": "Currencies",
    "icon": "monetization_on",
    "iconcolor": "",
    "target": "",
    "submenu": []
  }
],
	navbarTopLeftItems: [],
	navbarSideLeftItems: [],
	CountriesTableHeaderItems: [
  {
    "label": "Id",
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": "Continent Code",
    "align": "left",
    "sortable": false,
    "name": "continent_code",
    "field": "continent_code"
  },
  {
    "label": "Currency Code",
    "align": "left",
    "sortable": false,
    "name": "currency_code",
    "field": "currency_code"
  },
  {
    "label": "Iso2 Code",
    "align": "left",
    "sortable": false,
    "name": "iso2_code",
    "field": "iso2_code"
  },
  {
    "label": "Iso3 Code",
    "align": "left",
    "sortable": false,
    "name": "iso3_code",
    "field": "iso3_code"
  },
  {
    "label": "Iso Numeric Code",
    "align": "left",
    "sortable": false,
    "name": "iso_numeric_code",
    "field": "iso_numeric_code"
  },
  {
    "label": "Fips Code",
    "align": "left",
    "sortable": false,
    "name": "fips_code",
    "field": "fips_code"
  },
  {
    "label": "Calling Code",
    "align": "left",
    "sortable": false,
    "name": "calling_code",
    "field": "calling_code"
  },
  {
    "label": "Common Name",
    "align": "left",
    "sortable": false,
    "name": "common_name",
    "field": "common_name"
  },
  {
    "label": "Official Name",
    "align": "left",
    "sortable": false,
    "name": "official_name",
    "field": "official_name"
  },
  {
    "label": "Endonym",
    "align": "left",
    "sortable": false,
    "name": "endonym",
    "field": "endonym"
  },
  {
    "label": "Demonym",
    "align": "left",
    "sortable": false,
    "name": "demonym",
    "field": "demonym"
  },
  {
    "label": "Action",
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	CurrenciesTableHeaderItems: [
  {
    "label": "Id",
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": "Iso Code",
    "align": "left",
    "sortable": false,
    "name": "iso_code",
    "field": "iso_code"
  },
  {
    "label": "Iso Numeric Code",
    "align": "left",
    "sortable": false,
    "name": "iso_numeric_code",
    "field": "iso_numeric_code"
  },
  {
    "label": "Common Name",
    "align": "left",
    "sortable": false,
    "name": "common_name",
    "field": "common_name"
  },
  {
    "label": "Official Name",
    "align": "left",
    "sortable": false,
    "name": "official_name",
    "field": "official_name"
  },
  {
    "label": "Symbol",
    "align": "left",
    "sortable": false,
    "name": "symbol",
    "field": "symbol"
  },
  {
    "label": "Action",
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],

    exportFormats: {
        print: {
			label: 'Print',
			color: 'blue',
            icon: 'print',
            id: 'print',
            ext: '',
        },
        pdf: {
			label: 'Pdf',
			color: 'red',
            icon: 'picture_as_pdf',
            id: 'pdf',
            ext: 'pdf',
        },
        excel: {
			label: 'Excel',
			color: 'green',
            icon: 'grid_on',
            id: 'excel',
            ext: 'xlsx',
        },
        csv: {
			label: 'Csv',
			color: 'teal',
            icon: 'grid_on',
            id: 'csv',
            ext: 'csv',
        },
    },
    
}