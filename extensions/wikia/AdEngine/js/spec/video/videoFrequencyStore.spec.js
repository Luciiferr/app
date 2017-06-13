/*global describe, it, jasmine, expect, modules, spyOn */
describe('ext.wikia.adEngine.video.videoFrequencyStore', function () {
	'use strict';

	var noop = function () {},
		mocks = {
			adContext: {
				getContext: function () {
					return {
						opts: {
							outstreamVideoFrequencyCapping: ['3/10pv', '5/10min']
						}
					};
				}
			},
			cache: {
				get: noop,
				set: noop
			},
			log: noop,
			pageViewCounter: {
				get: noop
			}
		};

	mocks.log.levels = {};

	beforeEach(function () {
		jasmine.clock().install();
	});

	afterEach(function () {
		jasmine.clock().uninstall();
	});

	function getModule() {
		return modules['ext.wikia.adEngine.video.videoFrequencyStore'](
			mocks.adContext,
			mocks.pageViewCounter,
			mocks.cache,
			mocks.log
		);
	}

	it('Should return correct number of elements based on date', function () {
		var store = getModule();
		jasmine.clock().mockDate(new Date(6 * 1000));

		store.save({date: 1000, pv: 1});
		store.save({date: 2000, pv: 2});
		store.save({date: 2999, pv: 3});
		store.save({date: 3000, pv: 4});
		store.save({date: 4000, pv: 5});
		store.save({date: 5000, pv: 6});

		expect(store.numberOfVideosSeenInLast(3, 'sec')).toEqual(3);
	});

	it('Should return correct number of elements based on pv if there is no stored item', function () {
		var store = getModule();

		expect(store.numberOfVideosSeenInLastPageViews(10)).toEqual(0);
	});

	it('Should return correct number of elements based on pv', function () {
		var store = getModule();
		spyOn(mocks.pageViewCounter, 'get');

		store.save({date: 1000, pv: 1});
		store.save({date: 2999, pv: 3});
		mocks.pageViewCounter.get.and.returnValue(4);
		expect(store.numberOfVideosSeenInLastPageViews(2)).toEqual(1);

		store.save({date: 3000, pv: 4});
		store.save({date: 5000, pv: 6});
		mocks.pageViewCounter.get.and.returnValue(7);
		expect(store.numberOfVideosSeenInLastPageViews(4)).toEqual(3);
	});

	it('Should not add invalid data', function () {
		var store = getModule();

		store.save({pv: 1});
		store.save({irrelevant: true});
		store.save({date: 2999, pv: 3});
		store.save({date: 2999});
		store.save({date: 'abc', pv: 'def'});

		expect(store.getAll()).toEqual([{date: 2999, pv: 3}]);
	});
});

